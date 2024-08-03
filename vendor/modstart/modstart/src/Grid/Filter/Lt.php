<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Lt extends AbstractFilter { public function condition($dLG7_) { goto hbyTx; HREWa: if (is_null($VuXfH)) { return; } goto PFK5d; PFK5d: $this->value = $VuXfH; goto qs4ya; hbyTx: $VuXfH = array_get($dLG7_, $this->column); goto HREWa; qs4ya: return $this->buildCondition($this->column, '<=', $this->value); goto eLlig; eLlig: } }