<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\HtmlUtil; class RichHtml extends AbstractField { protected $listable = false; protected static $js = array('asset/common/editor.js'); protected function setup() { $this->addVariables(array('editorMode' => 'default', 'server' => modstart_admin_url('data/ueditor'), 'htmlFilter' => true, 'editorOption' => null)); } public function editorMode($Meki8) { $this->addVariables(array('editorMode' => $Meki8)); return $this; } public function htmlFilter($AKg7l = true) { $this->addVariables(array('htmlFilter' => $AKg7l)); return $this; } public function editorOption($VuXfH = true) { $this->addVariables(array('editorOption' => $VuXfH)); return $this; } public function server($HCA_O) { $this->addVariables(array('server' => $HCA_O)); return $this; } public function prepareInput($VuXfH, $QG_t_) { if ($this->variables['htmlFilter']) { $VuXfH = HtmlUtil::filter($VuXfH); } return $VuXfH; } }