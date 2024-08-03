<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Biz; class NavPosition extends AbstractNavPositionBiz { private $name; private $title; public static function make($rfBQu, $xy3eh) { goto wAtGM; wAtGM: $Fay2L = new static(); goto z92F0; LY1lY: return $Fay2L; goto pzt1T; qO3TR: $Fay2L->title = $xy3eh; goto LY1lY; z92F0: $Fay2L->name = $rfBQu; goto qO3TR; pzt1T: } public function name() { return $this->name; } public function title() { return $this->title; } }