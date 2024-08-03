<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Input\Response; use ModStart\Data\DataManager; class FileTemp extends AbstractField { protected $width = 80; protected static $js = array('asset/common/uploadButton.js'); protected function setup() { $this->addVariables(array('autoSave' => true, 'server' => modstart_admin_url('data/file_manager/file'))); } public function server($HCA_O) { $this->addVariables(array('server' => $HCA_O)); return $this; } public function autoSave($VuXfH) { $this->addVariables(array('autoSave' => $VuXfH)); return $this; } public function prepareInput($VuXfH, $Wa8N4) { if (!empty($this->variables['autoSave']) && DataManager::isDataTemp($VuXfH)) { goto Dbgrv; Dbgrv: $nMi2c = DataManager::storeTempDataByPath($VuXfH); goto c0jGy; c0jGy: if (Response::isError($nMi2c)) { return $VuXfH; } goto b2Glk; b2Glk: return DataManager::fix($nMi2c['data']['path']); goto kTgNW; kTgNW: } return $VuXfH; } }