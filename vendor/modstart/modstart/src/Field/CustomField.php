<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use Illuminate\Support\Facades\View; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Util\SerializeUtil; use ModStart\Field\Type\CustomFieldType; class CustomField extends AbstractField { protected $listable = false; protected function setup() { $this->addVariables(array()); } public function unserializeValue($VuXfH, AbstractField $dBa7F) { goto t1YSL; po1XN: if (!isset($VuXfH['data'])) { $VuXfH['data'] = array(); } goto SY0vb; t1YSL: if (null === $VuXfH) { return $VuXfH; } goto mAIVi; mAIVi: $VuXfH = @json_decode($VuXfH, true); goto Doumm; vkxWe: return $VuXfH; goto o9GAw; hliV7: if (!isset($VuXfH['title'])) { $VuXfH['title'] = ''; } goto po1XN; Doumm: if (empty($VuXfH)) { $VuXfH = array(); } goto E8Zci; E8Zci: if (!isset($VuXfH['type'])) { $VuXfH['type'] = ''; } goto hliV7; SY0vb: if (!isset($VuXfH['data']['option'])) { $VuXfH['data']['option'] = array(); } goto vkxWe; o9GAw: } public function serializeValue($VuXfH, $Wa8N4) { return SerializeUtil::jsonEncode($VuXfH); } public function prepareInput($VuXfH, $Wa8N4) { goto jM4rB; QDrL4: if (empty($VuXfH)) { $VuXfH = array(); } goto PBsGR; PBsGR: return $VuXfH; goto quEsE; jM4rB: $VuXfH = @json_decode($VuXfH, true); goto QDrL4; quEsE: } public static function getDefaultValueObject($Px5Cq) { goto wrQix; wrQix: $VuXfH = array(); goto kajhZ; kajhZ: foreach ($Px5Cq as $vhE98) { goto jaMwS; Nqr9x: $VuXfH[$vhE98['_name']] = $bX2xJ; goto qLpt_; jaMwS: if (empty($vhE98)) { continue; } goto BMLaj; JlCuT: switch ($vhE98['type']) { case CustomFieldType::TYPE_FILES: $bX2xJ = array(); break; } goto Nqr9x; BMLaj: $bX2xJ = null; goto JlCuT; qLpt_: } goto s2Wn_; s2Wn_: return $VuXfH; goto PTwYh; PTwYh: } public static function fetchInputOrFail($Px5Cq, InputPackage $gY_Ck, $kKcR8 = array()) { goto U9IGd; rSOKT: $nx179 = array(); goto Du63Y; U9IGd: if (!isset($kKcR8['tipPrefix'])) { $kKcR8['tipPrefix'] = ''; } goto rSOKT; Du63Y: foreach ($Px5Cq as $vhE98) { if (empty($vhE98)) { continue; } switch ($vhE98['type']) { case CustomFieldType::TYPE_TEXT: case CustomFieldType::TYPE_RADIO: $nx179[$vhE98['_name']] = $gY_Ck->getTrimString($vhE98['_name']); break; case CustomFieldType::TYPE_FILE: $nx179[$vhE98['_name']] = $gY_Ck->getDataUploadedPath($vhE98['_name']); break; case CustomFieldType::TYPE_FILES: $nx179[$vhE98['_name']] = $gY_Ck->getDataUploadedPathArray($vhE98['_name']); break; default: BizException::throws($kKcR8['tipPrefix'] . "不支持的字段类型: {$vhE98['type']}"); } } goto YD0El; YD0El: return $nx179; goto O9iSQ; O9iSQ: } public static function fetchValueObject($Px5Cq, $x0Oma, $kKcR8 = array()) { goto gMBn4; b2uMx: foreach ($Px5Cq as $vhE98) { goto GS2ER; EiC1d: switch ($vhE98['type']) { case CustomFieldType::TYPE_FILES: goto CqsBc; CqsBc: $LPrMQ[$vhE98['_name']] = @json_decode($LPrMQ[$vhE98['_name']], true); goto oSXeg; HJ0Wn: break; goto RTNru; oSXeg: if (empty($LPrMQ[$vhE98['_name']])) { $LPrMQ[$vhE98['_name']] = array(); } goto HJ0Wn; RTNru: } goto nTfA8; GS2ER: if (empty($vhE98)) { continue; } goto aAchb; aAchb: $LPrMQ[$vhE98['_name']] = $x0Oma[$vhE98['_name']]; goto EiC1d; nTfA8: } goto jA81g; gMBn4: $LPrMQ = array(); goto b2uMx; jA81g: return $LPrMQ; goto FLMTy; FLMTy: } public static function fetchedValueToString($dBa7F, $VuXfH, $kKcR8 = array()) { switch ($dBa7F['type']) { case CustomFieldType::TYPE_TEXT: case CustomFieldType::TYPE_RADIO: case CustomFieldType::TYPE_FILE: return $VuXfH; case CustomFieldType::TYPE_FILES: return join(',', $VuXfH); default: BizException::throws($kKcR8['tipPrefix'] . "不支持的字段类型: {$dBa7F['type']}"); } return null; } public static function renderAllDetailTableTr($Px5Cq, $x0Oma, $kKcR8 = array()) { return View::make('modstart::core.field.customField.detailTableTr', array('fields' => $Px5Cq, 'value' => $x0Oma, 'param' => $kKcR8))->render(); } public static function buildRecordFieldsValues($hG4kK, $Yj9kZ, $OFAbu = 'fieldCustom', $Zyxt1 = 5) { goto PgYHG; ONU4z: foreach ($hG4kK['_' . $OFAbu] as $vhE98) { goto SjQlD; eCw0g: $Gnobr[] = array('name' => $vhE98['_name'], 'value' => $VuXfH, 'field' => $vhE98, 'record' => $Yj9kZ); goto A3vUr; SjQlD: if (empty($vhE98)) { continue; } goto EK_uU; EK_uU: $VuXfH = self::prepareDetail($vhE98, $Yj9kZ[$vhE98['_name']]); goto eCw0g; A3vUr: } goto WnfSK; PgYHG: self::buildFieldsData($hG4kK, $OFAbu, $Zyxt1); goto m_Ntg; WnfSK: return $Gnobr; goto UUsvF; m_Ntg: $Gnobr = array(); goto ONU4z; UUsvF: } public static function hasFields($nx179, $OFAbu = 'fieldCustom', $Zyxt1 = 5) { for ($qsK6T = 1; $qsK6T <= $Zyxt1; $qsK6T++) { if (empty($nx179[$OFAbu . $qsK6T])) { continue; } $dBa7F = $nx179[$OFAbu . $qsK6T]; if (is_string($dBa7F)) { $dBa7F = @json_decode($dBa7F, true); } if (empty($dBa7F['type']) || empty($dBa7F['title'])) { continue; } return true; } return false; } public static function buildFieldsData(&$nx179, $WMFOz = 'fieldCustom', $Zyxt1 = 5) { goto lSJvU; lSJvU: if (empty($nx179)) { return; } goto LPmOE; owjH8: $nx179['_' . $WMFOz] = $oulTr; goto zDRCE; LPmOE: $oulTr = array(); goto FZVQj; FZVQj: for ($qsK6T = 1; $qsK6T <= $Zyxt1; $qsK6T++) { $dBa7F = $nx179[$WMFOz . $qsK6T]; if (is_string($dBa7F)) { $dBa7F = @json_decode($dBa7F, true); } if (empty($dBa7F['type']) || empty($dBa7F['title'])) { $dBa7F = null; } else { $dBa7F['_name'] = $WMFOz . $qsK6T; } $oulTr[] = $dBa7F; } goto owjH8; zDRCE: } public static function prepareInputOrFail($dBa7F, $BC2Wv, InputPackage $gY_Ck) { goto OoWKA; pJrn0: switch ($dBa7F['type']) { case 'Text': case 'Radio': return $gY_Ck->getTrimString($BC2Wv); case 'File': return $gY_Ck->getFilePath($BC2Wv); case 'Files': $nx179 = $gY_Ck->getJsonFilesPath($BC2Wv); return SerializeUtil::jsonEncode($nx179); } goto wnt2b; OoWKA: if (empty($dBa7F['type']) || empty($dBa7F['title'])) { return ''; } goto V0jQU; wnt2b: BizException::throws('未知的自定义字段类型:' . SerializeUtil::jsonEncode($dBa7F)); goto CtLQR; V0jQU: if (!CustomFieldType::isValid($dBa7F['type'])) { return ''; } goto pJrn0; CtLQR: } public static function prepareDetail($dBa7F, $VuXfH) { goto X1PZd; nap9U: if (!CustomFieldType::isValid($dBa7F['type'])) { return ''; } goto NQ4bv; X1PZd: if (empty($dBa7F['type']) || empty($dBa7F['title'])) { return ''; } goto nap9U; NQ4bv: switch ($dBa7F['type']) { case 'Text': case 'Radio': case 'File': return $VuXfH; case 'Files': if (!is_array($VuXfH)) { $VuXfH = @json_decode($VuXfH, true); if (empty($VuXfH) || !is_array($VuXfH)) { $VuXfH = array(); } } return $VuXfH; } goto mheSZ; mheSZ: return null; goto QsTmY; QsTmY: } public static function renderAllFormFieldVue($Px5Cq, $kKcR8 = array()) { return View::make('modstart::core.field.customField.formFieldVue', array('fields' => $Px5Cq, 'param' => $kKcR8))->render(); } public static function renderForm($dBa7F, $BC2Wv, $VuXfH, $kKcR8 = array()) { goto Uo8Ch; Uo8Ch: if (empty($dBa7F['type']) || empty($dBa7F['title'])) { return ''; } goto iuIIE; ZbZL9: return View::make('modstart::core.field.customField.form.' . $dBa7F['type'], array('fieldName' => $BC2Wv, 'field' => $dBa7F, 'value' => $VuXfH, 'param' => $kKcR8))->render(); goto DKGOY; iuIIE: if (!CustomFieldType::isValid($dBa7F['type'])) { return ''; } goto U2Wpp; U2Wpp: $VuXfH = self::prepareDetail($dBa7F, $VuXfH); goto ZbZL9; DKGOY: } public static function renderDetail($dBa7F, $VuXfH) { goto T024M; mwZsH: if (!CustomFieldType::isValid($dBa7F['type'])) { return ''; } goto EAa24; T024M: if (empty($dBa7F['type']) || empty($dBa7F['title'])) { return ''; } goto mwZsH; rN8dx: return View::make('modstart::core.field.customField.detail.' . $dBa7F['type'], array('field' => $dBa7F, 'value' => $VuXfH))->render(); goto Zq6Pj; EAa24: $VuXfH = self::prepareDetail($dBa7F, $VuXfH); goto rN8dx; Zq6Pj: } }