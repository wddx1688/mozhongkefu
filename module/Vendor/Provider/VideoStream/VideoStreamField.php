<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\VideoStream; use ModStart\Core\Util\SerializeUtil; use ModStart\Field\AbstractField; use ModStart\Support\Manager\FieldManager; class VideoStreamField extends AbstractField { const SCOPE_ADMIN = 'admin'; const SCOPE_MEMBER = 'member'; protected $view = 'module::Vendor.View.field.videoStream'; protected $value = array('driver' => null, 'name' => null, 'path' => null); protected function setup() { parent::setup(); $this->addVariables(array('scope' => self::SCOPE_ADMIN)); } public function scope($mjDJu = null) { goto Z2lSN; dtRGO: return $this; goto g0ds5; Z2lSN: if (null == $mjDJu) { return $this->getVariable('scope'); } goto ipwmg; ipwmg: $this->addVariables(array('scope' => $mjDJu)); goto dtRGO; g0ds5: } public function unserializeValue($qTz8C, AbstractField $E9h4W) { goto t6k7m; Rbz8F: if (empty($qTz8C['driver'])) { $qTz8C['driver'] = null; } goto mgYK_; t6k7m: $qTz8C = json_decode($qTz8C, true); goto Rbz8F; mgYK_: if (empty($qTz8C['name'])) { $qTz8C['name'] = null; } goto yDAM1; yDAM1: if (empty($qTz8C['path'])) { $qTz8C['path'] = null; } goto rDAkn; rDAkn: return $qTz8C; goto m9vRK; m9vRK: } public function serializeValue($qTz8C, $EZ1JE) { return SerializeUtil::jsonEncode($qTz8C, JSON_UNESCAPED_UNICODE); } public function prepareInput($qTz8C, $EZ1JE) { return json_decode($qTz8C, true); } public static function register() { FieldManager::extend('videoStream', VideoStreamField::class); } }