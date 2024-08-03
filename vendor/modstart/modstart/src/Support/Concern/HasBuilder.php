<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasBuilder { private $builder; public function builder($GOTEy) { $this->builder = $GOTEy; return $this; } private function runBuilder() { if ($this->builder) { call_user_func($this->builder, $this); } } }