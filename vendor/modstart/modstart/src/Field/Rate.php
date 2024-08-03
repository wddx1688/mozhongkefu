<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Rate extends AbstractField { protected function setup() { $this->addVariables(array('maxValue' => 10)); } public function maxValue($CY4kI) { $this->addVariables(array('maxValue' => $CY4kI)); return $this; } public function unserializeValue($VuXfH, AbstractField $dBa7F) { if ('' === $VuXfH || null === $VuXfH) { return null; } return intval($VuXfH); } public function serializeValue($VuXfH, $Wa8N4) { if ('' === $VuXfH || null === $VuXfH) { return null; } return intval($VuXfH); } public function prepareInput($VuXfH, $Wa8N4) { if ('' === $VuXfH || null === $VuXfH) { return null; } return intval($VuXfH); } }