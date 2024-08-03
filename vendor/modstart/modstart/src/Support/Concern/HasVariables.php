<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasVariables { protected $variables = array(); public function varaibles() { return $this->variables; } public function setVariable($HQ4FM, $VuXfH = null) { if (is_array($HQ4FM)) { foreach ($HQ4FM as $dKmL2 => $yFWLi) { $this->variables[$dKmL2] = $yFWLi; } } else { $this->variables[$HQ4FM] = $VuXfH; } } public function getVariable($HQ4FM, $RsCDD = null) { return isset($this->variables[$HQ4FM]) ? $this->variables[$HQ4FM] : $RsCDD; } }