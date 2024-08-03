<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\SerializeUtil; class JsonKeyValue extends AbstractField { protected $width = 200; public function unserializeValue($VuXfH, AbstractField $dBa7F) { return @json_decode($VuXfH, true); } public function serializeValue($VuXfH, $Wa8N4) { return SerializeUtil::jsonEncode($VuXfH); } public function prepareInput($VuXfH, $Wa8N4) { goto pgjUB; u1Zti: return $pKNCN; goto ePPpl; GCbzz: BizException::throwsIf($this->label . ' ' . L('Json Format Error'), $VuXfH && null === $pKNCN); goto u1Zti; pgjUB: $pKNCN = @json_decode($VuXfH, true); goto GCbzz; ePPpl: } }