<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Type\BaseType; class Checkbox extends AbstractFilterField { protected $options = array(); protected function setup() { $this->addFluentAttributeVariable('options'); } public function options($iVFbz = null) { goto xKQEs; pbVEa: $this->options = $VuXfH; goto T7ZVY; f1HIn: if (is_string($iVFbz) && is_subclass_of($iVFbz, BaseType::class)) { $VuXfH = $iVFbz::getList(); } else { if (is_array($iVFbz)) { $VuXfH = $iVFbz; } else { BizException::throws('Select options error'); } } goto pbVEa; xKQEs: if (null === $iVFbz) { return $this->options; } goto f1HIn; T7ZVY: } }