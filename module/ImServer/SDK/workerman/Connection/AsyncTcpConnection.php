<?php
 namespace Workerman\Connection; use Workerman\Events\EventInterface; use Workerman\Lib\Timer; use Workerman\Worker; use \Exception; class AsyncTcpConnection extends TcpConnection { public $onConnect = null; public $transport = 'tcp'; protected $_status = self::STATUS_INITIAL; protected $_remoteHost = ''; protected $_remotePort = 80; protected $_connectStartTime = 0; protected $_remoteURI = ''; protected $_contextOption = null; protected $_reconnectTimer = null; protected static $_builtinTransports = array( 'tcp' => 'tcp', 'udp' => 'udp', 'unix' => 'unix', 'ssl' => 'ssl', 'sslv2' => 'sslv2', 'sslv3' => 'sslv3', 'tls' => 'tls' ); public function __construct($remote_address, array $context_option = array()) { $address_info = \parse_url($remote_address); if (!$address_info) { list($scheme, $this->_remoteAddress) = \explode(':', $remote_address, 2); if (!$this->_remoteAddress) { Worker::safeEcho(new \Exception('bad remote_address')); } } else { if (!isset($address_info['port'])) { $address_info['port'] = 0; } if (!isset($address_info['path'])) { $address_info['path'] = '/'; } if (!isset($address_info['query'])) { $address_info['query'] = ''; } else { $address_info['query'] = '?' . $address_info['query']; } $this->_remoteAddress = "{$address_info['host']}:{$address_info['port']}"; $this->_remoteHost = $address_info['host']; $this->_remotePort = $address_info['port']; $this->_remoteURI = "{$address_info['path']}{$address_info['query']}"; $scheme = isset($address_info['scheme']) ? $address_info['scheme'] : 'tcp'; } $this->id = $this->_id = self::$_idRecorder++; if(\PHP_INT_MAX === self::$_idRecorder){ self::$_idRecorder = 0; } if (!isset(self::$_builtinTransports[$scheme])) { $scheme = \ucfirst($scheme); $this->protocol = '\\Protocols\\' . $scheme; if (!\class_exists($this->protocol)) { $this->protocol = "\\Workerman\\Protocols\\$scheme"; if (!\class_exists($this->protocol)) { throw new Exception("class \\Protocols\\$scheme not exist"); } } } else { $this->transport = self::$_builtinTransports[$scheme]; } ++self::$statistics['connection_count']; $this->maxSendBufferSize = self::$defaultMaxSendBufferSize; $this->maxPackageSize = self::$defaultMaxPackageSize; $this->_contextOption = $context_option; static::$connections[$this->_id] = $this; } public function connect() { if ($this->_status !== self::STATUS_INITIAL && $this->_status !== self::STATUS_CLOSING && $this->_status !== self::STATUS_CLOSED) { return; } $this->_status = self::STATUS_CONNECTING; $this->_connectStartTime = \microtime(true); if ($this->transport !== 'unix') { if (!$this->_remotePort) { $this->_remotePort = $this->transport === 'ssl' ? 443 : 80; $this->_remoteAddress = $this->_remoteHost.':'.$this->_remotePort; } if ($this->_contextOption) { $context = \stream_context_create($this->_contextOption); $this->_socket = \stream_socket_client("tcp://{$this->_remoteHost}:{$this->_remotePort}", $errno, $errstr, 0, \STREAM_CLIENT_ASYNC_CONNECT, $context); } else { $this->_socket = \stream_socket_client("tcp://{$this->_remoteHost}:{$this->_remotePort}", $errno, $errstr, 0, \STREAM_CLIENT_ASYNC_CONNECT); } } else { $this->_socket = \stream_socket_client("{$this->transport}://{$this->_remoteAddress}", $errno, $errstr, 0, \STREAM_CLIENT_ASYNC_CONNECT); } if (!$this->_socket || !\is_resource($this->_socket)) { $this->emitError(\WORKERMAN_CONNECT_FAIL, $errstr); if ($this->_status === self::STATUS_CLOSING) { $this->destroy(); } if ($this->_status === self::STATUS_CLOSED) { $this->onConnect = null; } return; } Worker::$globalEvent->add($this->_socket, EventInterface::EV_WRITE, array($this, 'checkConnection')); if(\DIRECTORY_SEPARATOR === '\\') { Worker::$globalEvent->add($this->_socket, EventInterface::EV_EXCEPT, array($this, 'checkConnection')); } } public function reconnect($after = 0) { $this->_status = self::STATUS_INITIAL; static::$connections[$this->_id] = $this; if ($this->_reconnectTimer) { Timer::del($this->_reconnectTimer); } if ($after > 0) { $this->_reconnectTimer = Timer::add($after, array($this, 'connect'), null, false); return; } $this->connect(); } public function cancelReconnect() { if ($this->_reconnectTimer) { Timer::del($this->_reconnectTimer); } } public function getRemoteHost() { return $this->_remoteHost; } public function getRemoteURI() { return $this->_remoteURI; } protected function emitError($code, $msg) { $this->_status = self::STATUS_CLOSING; if ($this->onError) { try { \call_user_func($this->onError, $this, $code, $msg); } catch (\Exception $e) { Worker::log($e); exit(250); } catch (\Error $e) { Worker::log($e); exit(250); } } } public function checkConnection() { if(\DIRECTORY_SEPARATOR === '\\') { Worker::$globalEvent->del($this->_socket, EventInterface::EV_EXCEPT); } Worker::$globalEvent->del($this->_socket, EventInterface::EV_WRITE); if ($this->_status !== self::STATUS_CONNECTING) { return; } if ($address = \stream_socket_get_name($this->_socket, true)) { \stream_set_blocking($this->_socket, false); if (\function_exists('stream_set_read_buffer')) { \stream_set_read_buffer($this->_socket, 0); } if (\function_exists('socket_import_stream') && $this->transport === 'tcp') { $raw_socket = \socket_import_stream($this->_socket); \socket_set_option($raw_socket, \SOL_SOCKET, \SO_KEEPALIVE, 1); \socket_set_option($raw_socket, \SOL_TCP, \TCP_NODELAY, 1); } if ($this->transport === 'ssl') { $this->_sslHandshakeCompleted = $this->doSslHandshake($this->_socket); if ($this->_sslHandshakeCompleted === false) { return; } } else { if ($this->_sendBuffer) { Worker::$globalEvent->add($this->_socket, EventInterface::EV_WRITE, array($this, 'baseWrite')); } } Worker::$globalEvent->add($this->_socket, EventInterface::EV_READ, array($this, 'baseRead')); $this->_status = self::STATUS_ESTABLISHED; $this->_remoteAddress = $address; if ($this->onConnect) { try { \call_user_func($this->onConnect, $this); } catch (\Exception $e) { Worker::log($e); exit(250); } catch (\Error $e) { Worker::log($e); exit(250); } } if ($this->protocol && \method_exists($this->protocol, 'onConnect')) { try { \call_user_func(array($this->protocol, 'onConnect'), $this); } catch (\Exception $e) { Worker::log($e); exit(250); } catch (\Error $e) { Worker::log($e); exit(250); } } } else { $this->emitError(\WORKERMAN_CONNECT_FAIL, 'connect ' . $this->_remoteAddress . ' fail after ' . round(\microtime(true) - $this->_connectStartTime, 4) . ' seconds'); if ($this->_status === self::STATUS_CLOSING) { $this->destroy(); } if ($this->_status === self::STATUS_CLOSED) { $this->onConnect = null; } } } } 