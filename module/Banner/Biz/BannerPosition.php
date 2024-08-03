<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; class BannerPosition extends AbstractBannerPositionBiz { private $name; private $title; public static function make($rfBQu, $xy3eh) { goto G3UDh; G3UDh: $Fay2L = new static(); goto eBcZX; zLYEQ: return $Fay2L; goto VatJk; V6uKm: $Fay2L->title = $xy3eh; goto zLYEQ; eBcZX: $Fay2L->name = $rfBQu; goto V6uKm; VatJk: } public function name() { return $this->name; } public function title() { return $this->title; } }