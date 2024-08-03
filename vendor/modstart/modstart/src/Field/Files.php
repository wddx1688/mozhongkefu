<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Util\ConvertUtil; use ModStart\Core\Util\SerializeUtil; class Files extends AbstractField { const MODE_DEFAULT = 'default'; const MODE_RAW = 'raw'; protected $width = 80; protected function setup() { $this->addVariables(array('mode' => self::MODE_DEFAULT, 'server' => modstart_admin_url('data/file_manager/file'))); } public function server($HCA_O) { $this->addVariables(array('server' => $HCA_O)); return $this; } public function mode($Meki8) { $this->addVariables(array('mode' => $Meki8)); return $this; } public function unserializeValue($VuXfH, AbstractField $dBa7F) { if (null === $VuXfH) { return $VuXfH; } return ConvertUtil::toArray($VuXfH); } public function serializeValue($VuXfH, $Wa8N4) { return SerializeUtil::jsonEncode($VuXfH); } public function prepareInput($VuXfH, $Wa8N4) { return ConvertUtil::toArray($VuXfH); } }