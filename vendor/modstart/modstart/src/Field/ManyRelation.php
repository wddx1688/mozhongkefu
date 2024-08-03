<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Input\InputPackage; use ModStart\Core\Util\ConvertUtil; use ModStart\Core\Util\SerializeUtil; class ManyRelation extends AbstractField { const MODE_GROUP_TAGS = 'groupTags'; protected $isCustomField = true; protected $defaultValue = array(); protected function setup() { $this->addVariables(array('relationTable' => '', 'relationModelIdKey' => '', 'relationIdKey' => '', 'mode' => self::MODE_GROUP_TAGS, 'groupTags' => array(), 'groupTagsTitleKey' => 'title', 'groupTagsChildKey' => '_child')); $this->hookValueSaved(function ($Ocn1V, AbstractField $dBa7F) { $gY_Ck = InputPackage::buildFromInput(); $tcwC2 = $gY_Ck->getJson($dBa7F->column, array()); ModelUtil::relationAssign($this->getVariable('relationTable'), $this->getVariable('relationModelIdKey'), $Ocn1V, $this->getVariable('relationIdKey'), $tcwC2); }); } public function mode($Meki8) { $this->addVariables(array('mode' => $Meki8)); return $this; } public function relationTable($R3agm, $w4J7F, $gDzTE) { goto toHjQ; hyvOz: return $this; goto lplZE; ZbWAB: $this->addVariables(array('relationIdKey' => $gDzTE)); goto hyvOz; toHjQ: $this->addVariables(array('relationTable' => $R3agm)); goto W9L9j; W9L9j: $this->addVariables(array('relationModelIdKey' => $w4J7F)); goto ZbWAB; lplZE: } public function groupTags($fGKyg, $XcLmo = 'title', $c1QyT = '_child') { goto BXCac; BXCac: $this->mode(self::MODE_GROUP_TAGS); goto otk67; otk67: $this->addVariables(array('groupTags' => $fGKyg, 'groupTagsTitleKey' => $XcLmo, 'groupTagsChildKey' => $c1QyT)); goto JOUpF; JOUpF: return $this; goto qWbM1; qWbM1: } public function renderView(AbstractField $dBa7F, $DUr2V, $kOFY1 = 0) { goto fCXT1; zthqe: if ($DUr2V) { goto L7SOX; J1g3j: $tcwC2 = ModelUtil::values($id6N9, $gDzTE, array($lDkDG => $DUr2V->id)); goto gOlIH; gn93o: $lDkDG = $dBa7F->getVariable('relationModelIdKey'); goto zjsd9; L7SOX: $id6N9 = $dBa7F->getVariable('relationTable'); goto gn93o; zjsd9: $gDzTE = $dBa7F->getVariable('relationIdKey'); goto J1g3j; gOlIH: } goto Nt2sQ; Nt2sQ: $this->value($tcwC2); goto xPnGw; fCXT1: $tcwC2 = array(); goto zthqe; xPnGw: return parent::renderView($dBa7F, $DUr2V, $kOFY1); goto xZ3go; xZ3go: } public function unserializeValue($VuXfH, AbstractField $dBa7F) { if (null === $VuXfH) { return $VuXfH; } return ConvertUtil::toArray($VuXfH); } public function serializeValue($VuXfH, $Wa8N4) { return SerializeUtil::jsonEncode($VuXfH); } public function prepareInput($VuXfH, $Wa8N4) { return ConvertUtil::toArray($VuXfH); } }