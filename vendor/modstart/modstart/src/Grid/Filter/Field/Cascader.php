<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Type\BaseType; class Cascader extends AbstractFilterField { protected $nodes = array(); protected function setup() { $this->addFluentAttributeVariable('nodes'); } public function nodes($EApxo = null) { goto wo7qg; sRD2O: $this->nodes = $VuXfH; goto rSsbc; wo7qg: if (null === $EApxo) { return $this->nodes; } goto Ys9ZT; Ys9ZT: if (is_string($EApxo) && is_subclass_of($EApxo, BaseType::class)) { goto nsfoo; zHhap: $YbS73 = 1; goto PtBU2; nsfoo: $VuXfH = array(); goto zHhap; PtBU2: foreach ($EApxo::getList() as $dKmL2 => $yFWLi) { $VuXfH[] = array('id' => $dKmL2, 'pid' => 0, 'title' => $yFWLi, 'sort' => $YbS73++); } goto TxqLt; TxqLt: } else { if (is_array($EApxo)) { $VuXfH = $EApxo; } else { BizException::throws('Select nodes error'); } } goto sRD2O; rSsbc: } }