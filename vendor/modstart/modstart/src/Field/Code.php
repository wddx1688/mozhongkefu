<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Code extends AbstractField { protected function setup() { $this->addVariables(array('maxHeight' => '10em', 'editorScripts' => '')); } public function maxHeight($VuXfH) { $this->addVariables(array('maxHeight' => $VuXfH)); return $this; } public function editorScripts($VuXfH) { $this->addVariables(array('editorScripts' => $VuXfH)); return $this; } }