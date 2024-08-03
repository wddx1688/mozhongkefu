<?php
 namespace Workerman\Protocols\Http; class Session { protected static $_handlerClass = 'Workerman\Protocols\Http\Session\FileSessionHandler'; protected static $_handlerConfig = null; protected static $_sessionGcProbability = 1; protected static $_sessionGcDivisor = 1000; protected static $_sessionGcMaxLifeTime = 1440; protected static $_handler = null; protected $_data = array(); protected $_needSave = false; protected $_sessionId = null; public function __construct($session_id) { static::checkSessionId($session_id); if (static::$_handler === null) { static::initHandler(); } $this->_sessionId = $session_id; if ($data = static::$_handler->read($session_id)) { $this->_data = \unserialize($data); } } public function getId() { return $this->_sessionId; } public function get($name, $default = null) { return isset($this->_data[$name]) ? $this->_data[$name] : $default; } public function set($name, $value) { $this->_data[$name] = $value; $this->_needSave = true; } public function delete($name) { unset($this->_data[$name]); $this->_needSave = true; } public function pull($name, $default = null) { $value = $this->get($name, $default); $this->delete($name); return $value; } public function put($key, $value = null) { if (!\is_array($key)) { $this->set($key, $value); return; } foreach ($key as $k => $v) { $this->_data[$k] = $v; } $this->_needSave = true; } public function forget($name) { if (\is_scalar($name)) { $this->delete($name); return; } if (\is_array($name)) { foreach ($name as $key) { unset($this->_data[$key]); } } $this->_needSave = true; } public function all() { return $this->_data; } public function flush() { $this->_needSave = true; $this->_data = array(); } public function has($name) { return isset($this->_data[$name]); } public function exists($name) { return \array_key_exists($name, $this->_data); } public function save() { if ($this->_needSave) { if (empty($this->_data)) { static::$_handler->destroy($this->_sessionId); } else { static::$_handler->write($this->_sessionId, \serialize($this->_data)); } } $this->_needSave = false; } public static function init() { if ($gc_probability = \ini_get('session.gc_probability')) { self::$_sessionGcProbability = (int)$gc_probability; } if ($gc_divisor = \ini_get('session.gc_divisor')) { self::$_sessionGcDivisor = (int)$gc_divisor; } if ($gc_max_life_time = \ini_get('session.gc_maxlifetime')) { self::$_sessionGcMaxLifeTime = (int)$gc_max_life_time; } } public static function handlerClass($class_name = null, $config = null) { if ($class_name) { static::$_handlerClass = $class_name; } if ($config) { static::$_handlerConfig = $config; } return static::$_handlerClass; } protected static function initHandler() { if (static::$_handlerConfig === null) { static::$_handler = new static::$_handlerClass(); } else { static::$_handler = new static::$_handlerClass(static::$_handlerConfig); } } public function tryGcSessions() { if (\rand(1, static::$_sessionGcDivisor) > static::$_sessionGcProbability) { return; } static::$_handler->gc(static::$_sessionGcMaxLifeTime); } public function __destruct() { $this->save(); $this->tryGcSessions(); } protected static function checkSessionId($session_id) { if (!\preg_match('/^[a-zA-Z0-9]+$/', $session_id)) { throw new SessionException("session_id $session_id is invalid"); } } } class SessionException extends \RuntimeException { } Session::init();