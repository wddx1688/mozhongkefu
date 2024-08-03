<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Type\BaseType; class Radio extends AbstractFilterField { protected $options = array(); protected function setup() { $this->addFluentAttributeVariable('options'); } public function options($iVFbz = null) { goto NoPGB; HK7uZ: if (is_string($iVFbz) && is_subclass_of($iVFbz, BaseType::class)) { $VuXfH = $iVFbz::getList(); } else { if (is_array($iVFbz)) { $VuXfH = $iVFbz; } else { BizException::throws('Select options error'); } } goto WlXAs; WlXAs: $this->options = $VuXfH; goto Hmxqk; NoPGB: if (null === $iVFbz) { return $this->options; } goto HK7uZ; Hmxqk: } }