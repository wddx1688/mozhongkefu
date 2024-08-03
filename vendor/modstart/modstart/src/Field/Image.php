<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Image extends AbstractField { const MODE_DEFAULT = 'default'; const MODE_RAW = 'raw'; protected $width = 80; protected function setup() { $this->addVariables(array('category' => 'image', 'mode' => self::MODE_DEFAULT, 'server' => modstart_admin_url('data/file_manager/image'))); } public function server($HCA_O) { $this->addVariables(array('server' => $HCA_O)); return $this; } public function mode($Meki8) { $this->addVariables(array('mode' => $Meki8)); return $this; } }