<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use Illuminate\Support\Str; use ModStart\Core\Type\TypeUtil; use ModStart\Core\Util\ConstantUtil; use ModStart\Field\Concern\CanCascadeFields; class Type extends AbstractField { use CanCascadeFields; protected function setup() { $this->addVariables(array('valueMap' => null, 'colorMap' => array())); } public function type($VuXfH, $tvYKD = array()) { goto ljLGu; u9brS: $this->addVariables(array('valueMap' => $VuXfH, 'colorMap' => $tvYKD)); goto Ed_Nw; ljLGu: if ($VuXfH instanceof \Closure) { $VuXfH = call_user_func($VuXfH, $this); } else { if (is_array($VuXfH)) { } else { if (null !== $tvYKD && is_array($tvYKD) && empty($tvYKD)) { $tvYKD = TypeUtil::colorGuessMap($VuXfH); } $VuXfH = $VuXfH::getList(); } } goto u9brS; Ed_Nw: return $this; goto rQmdP; rQmdP: } public function render() { $this->addCascadeScript(); return parent::render(); } }