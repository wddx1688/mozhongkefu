<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Audio extends AbstractField { const MODE_DEFAULT = 'default'; const MODE_RAW = 'raw'; protected $width = 80; protected function setup() { $this->addVariables(array('previewPlay' => false, 'category' => 'audio', 'mode' => self::MODE_DEFAULT, 'server' => modstart_admin_url('data/file_manager/audio'))); } public function previewPlay($VjQ3H) { goto hPml1; hPml1: $this->addVariables(array('previewPlay' => $VjQ3H)); goto QH7O4; IkSPu: return $this; goto fnYxM; QH7O4: if ($VjQ3H) { $this->width = 400; } goto IkSPu; fnYxM: } public function server($HCA_O) { $this->addVariables(array('server' => $HCA_O)); return $this; } public function mode($Meki8) { $this->addVariables(array('mode' => $Meki8)); return $this; } }