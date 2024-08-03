<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; use ModStart\Grid\Filter\Field\Datetime; class Range extends AbstractFilter { public function condition($SPnSA) { if (isset($SPnSA['range']) && ($SPnSA['range']['min'] || $SPnSA['range']['max'])) { goto nLnQY; fGe_m: if (!isset($VuXfH['max'])) { return $this->buildCondition($this->column, '>=', $VuXfH['min']); } goto iFdlX; hZn93: return $this->buildCondition($this->column, array($VuXfH['min'], $VuXfH['max'])); goto vMgv3; Et3pR: if (!isset($VuXfH['min'])) { return $this->buildCondition($this->column, '<=', $VuXfH['max']); } goto fGe_m; nLnQY: $VuXfH = $SPnSA['range']; goto Et3pR; iFdlX: $this->query = 'whereBetween'; goto hZn93; vMgv3: } return null; } public function datetime() { $this->field = new Field\Datetime($this); return $this; } public function date() { $this->field = new Field\Date($this); return $this; } public function text() { $this->field = new Field\Text($this); return $this; } public function number() { $this->field = new Field\Number($this); return $this; } }