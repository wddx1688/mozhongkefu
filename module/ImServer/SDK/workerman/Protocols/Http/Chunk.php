<?php
 namespace Workerman\Protocols\Http; class Chunk { protected $_buffer = null; public function __construct($buffer) { $this->_buffer = $buffer; } public function __toString() { return \dechex(\strlen($this->_buffer))."\r\n$this->_buffer\r\n"; } }