<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Textarea extends AbstractField { protected function setup() { $this->addVariables(array('autoHeight' => false, 'autoHeightMin' => 300)); } public function autoHeight($VuXfH, $r2BC4 = 300) { $this->addVariables(array('autoHeight' => $VuXfH, 'autoHeightMin' => $r2BC4)); return $this; } }