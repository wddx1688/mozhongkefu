<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\StrUtil; class Text extends AbstractField { protected function setup() { $this->addVariables(array('autoTrim' => false)); } public function autoTrim($VjQ3H = true) { $this->addVariables(array('autoTrim' => $VjQ3H)); return $this; } public function prepareInput($VuXfH, $QG_t_) { if ($this->variables['autoTrim']) { $VuXfH = StrUtil::filterSpecialChars($VuXfH); $VuXfH = trim($VuXfH); } return $VuXfH; } }