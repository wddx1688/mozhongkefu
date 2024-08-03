<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Gt extends AbstractFilter { public function condition($dLG7_) { goto QeGZu; QeGZu: $VuXfH = array_get($dLG7_, $this->column); goto rvi0r; pvEAs: $this->value = $VuXfH; goto sYZOe; sYZOe: return $this->buildCondition($this->column, '>=', $this->value); goto wRzrs; rvi0r: if (is_null($VuXfH)) { return; } goto pvEAs; wRzrs: } }