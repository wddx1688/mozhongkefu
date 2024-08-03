<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; class EmptyItem extends \stdClass { private $attributes = array(); public function __construct($Jj48h = array()) { $this->attributes = array_merge($this->attributes, $Jj48h); } public function __get($HQ4FM) { return isset($this->attributes[$HQ4FM]) ? $this->attributes[$HQ4FM] : null; } public function __set($HQ4FM, $VuXfH) { $this->attributes[$HQ4FM] = $VuXfH; } }