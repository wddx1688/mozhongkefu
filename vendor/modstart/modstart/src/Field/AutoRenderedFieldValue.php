<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use Illuminate\Support\Facades\View; class AutoRenderedFieldValue { private $value; public function __construct($VuXfH) { $this->value = $VuXfH; } public static function make($VuXfH) { return new static($VuXfH); } public static function makeView($de9hK, $l1eNl = array()) { return self::make(View::make($de9hK, $l1eNl)->render()); } public function getValue() { return $this->value; } }