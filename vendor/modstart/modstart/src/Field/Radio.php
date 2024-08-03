<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\ConvertUtil; use ModStart\Field\Concern\CanCascadeFields; use ModStart\Field\Type\FieldRenderMode; class Radio extends AbstractField { use CanCascadeFields; protected function setup() { $this->addVariables(array('vertical' => false, 'options' => array())); } public function vertical($VuXfH) { $this->addVariables(array('vertical' => $VuXfH)); return $this; } public function optionValues($tcwC2) { $tcwC2 = array_build($tcwC2, function ($cANPj, $VuXfH) { return array($VuXfH, $VuXfH); }); return $this->options($tcwC2); } public function options($iVFbz) { $this->addVariables(array('options' => $iVFbz)); return $this; } public function optionType($iCXib) { return $this->options($iCXib::getList()); } public function optionModel($R3agm, $PkGEp = 'id', $HamKI = 'name') { return $this->options(ModelUtil::valueMap($R3agm, $PkGEp, $HamKI)); } public function render() { $this->addCascadeScript(); return parent::render(); } }