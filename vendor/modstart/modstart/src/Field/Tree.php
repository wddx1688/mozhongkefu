<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\ConvertUtil; use ModStart\Core\Util\SerializeUtil; use ModStart\Field\Type\FieldRenderMode; class Tree extends AbstractField { private $columnNames = array('id' => 'id', 'title' => 'title', 'children' => '_child'); protected function setup() { $this->addVariables(array('spread' => true, 'independentEnable' => false, 'nodes' => array())); } public function columnNameId($VuXfH) { $this->columnNames['id'] = $VuXfH; return $this; } public function columnNameTitle($VuXfH) { $this->columnNames['title'] = $VuXfH; return $this; } public function columnNameChildren($VuXfH) { $this->columnNames['children'] = $VuXfH; return $this; } public function spread($VuXfH) { $this->addVariables(array('spread' => $VuXfH)); return $this; } public function independentEnable($VjQ3H) { $this->addVariables(array('independentEnable' => $VjQ3H)); return $this; } public function unserializeValue($VuXfH, AbstractField $dBa7F) { if (null === $VuXfH) { return $VuXfH; } return ConvertUtil::toArray($VuXfH); } public function serializeValue($VuXfH, $Wa8N4) { return SerializeUtil::jsonEncode($VuXfH); } public function prepareInput($VuXfH, $Wa8N4) { return ConvertUtil::toArray($VuXfH); } public function tree($owLu9) { goto q97lH; q97lH: if ($owLu9 instanceof \Closure) { $owLu9 = $owLu9($this); } goto wv7a9; wv7a9: $this->addVariables(array('nodes' => $this->formatNodes($owLu9))); goto KnU9i; KnU9i: return $this; goto xhDBF; xhDBF: } private function formatNodes($owLu9) { goto rEouk; WkTik: foreach ($owLu9 as $DUr2V) { goto F42hZ; lxO1U: $o4EWe['spread'] = $this->getVariable('spread', true); goto TVKnK; xChhU: $o4EWe['title'] = $DUr2V[$this->columnNames['title']]; goto hS8bc; RtkDt: $EApxo[] = $o4EWe; goto gtKeE; F42hZ: $o4EWe = array(); goto lxO1U; hS8bc: if (!empty($DUr2V[$this->columnNames['children']])) { $o4EWe['children'] = $this->formatNodes($DUr2V[$this->columnNames['children']]); } goto RtkDt; TVKnK: $o4EWe['id'] = $DUr2V[$this->columnNames['id']]; goto xChhU; gtKeE: } goto T9Sr1; T9Sr1: return $EApxo; goto EWiG8; rEouk: $EApxo = array(); goto WkTik; EWiG8: } }