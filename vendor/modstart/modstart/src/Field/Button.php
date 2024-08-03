<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Button extends AbstractField { protected $listable = false; protected $showable = false; protected function setup() { $this->addVariables(array('type' => 'button', 'style' => 'default')); } public function type($VuXfH) { $this->addVariables(array('type' => $VuXfH)); return $this; } public function style($VuXfH) { $this->addVariables(array('style' => $VuXfH)); return $this; } public function forSubmit() { $this->addVariables(array('type' => 'submit', 'style' => 'primary')); } }