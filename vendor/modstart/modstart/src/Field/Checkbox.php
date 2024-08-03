<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\ConvertUtil; use ModStart\Core\Util\SerializeUtil; use ModStart\Core\Util\TagUtil; use ModStart\Field\Concern\CanCascadeFields; class Checkbox extends AbstractField { use CanCascadeFields; const SERIALIZE_TYPE_DEFAULT = null; const SERIALIZE_TYPE_COLON_SEPARATED = 1; protected $value = array(); protected function setup() { $this->addVariables(array('options' => array(), 'serializeType' => null)); } public function options($iVFbz) { $this->addVariables(array('options' => $iVFbz)); return $this; } public function serializeType($VuXfH) { $this->addVariables(array('serializeType' => $VuXfH)); return $this; } public function optionModel($R3agm, $PkGEp = 'id', $HamKI = 'name') { return $this->options(ModelUtil::valueMap($R3agm, $PkGEp, $HamKI)); } public function optionType($iNs0D) { return $this->options($iNs0D::getList()); } public function unserializeValue($VuXfH, AbstractField $dBa7F) { if (null === $VuXfH) { return $VuXfH; } switch ($this->getVariable('serializeType')) { case self::SERIALIZE_TYPE_COLON_SEPARATED: return TagUtil::string2Array($VuXfH); default: return ConvertUtil::toArray($VuXfH); } } public function serializeValue($VuXfH, $Wa8N4) { switch ($this->getVariable('serializeType')) { case self::SERIALIZE_TYPE_COLON_SEPARATED: return TagUtil::array2String($VuXfH); default: if (is_array($VuXfH)) { foreach ($VuXfH as $dKmL2 => $yFWLi) { if (is_numeric($yFWLi) && preg_match('/^\\d+$/', $yFWLi)) { $VuXfH[$dKmL2] = intval($yFWLi); } } } return SerializeUtil::jsonEncode($VuXfH); } } public function prepareInput($VuXfH, $Wa8N4) { switch ($this->getVariable('serializeType')) { case self::SERIALIZE_TYPE_COLON_SEPARATED: return TagUtil::string2Array($VuXfH); default: return ConvertUtil::toArray($VuXfH, false); } } public function render() { $this->addCascadeScript(); return parent::render(); } }