<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Message; use ModStart\Core\Util\SerializeUtil; use Module\ImServer\Type\ImMsgType; class ChatMsg { protected $type = null; protected $data = array(); protected $amqp = array(); protected $context = array(); public static function make($mhShF) { goto MKf0O; p2ltc: return $miOiF; goto EFaMA; MKf0O: $miOiF = new ChatMsg(); goto gmuR3; gmuR3: $miOiF->type($mhShF); goto p2ltc; EFaMA: } public static function makePush($jvw8r, $pSTkI) { goto NiLhQ; oLKKT: return $miOiF; goto K0qj4; Kffh8: $miOiF->data(array('type' => $jvw8r, 'data' => $pSTkI)); goto oLKKT; NiLhQ: $miOiF = self::make(ImMsgType::PUSH); goto Kffh8; K0qj4: } public static function makeError($miOiF) { goto EhSE5; gJQxv: return $nDEkT; goto aA4sO; uJB9p: $nDEkT->data(array('msg' => $miOiF)); goto gJQxv; EhSE5: $nDEkT = self::make(ImMsgType::ERROR); goto uJB9p; aA4sO: } public function type($mhShF = null) { goto w80QW; w80QW: if (is_null($mhShF)) { return $this->type; } goto HFRZ2; ohwB9: return $this; goto ccSx2; HFRZ2: $this->type = $mhShF; goto ohwB9; ccSx2: } public function setContextValue($Cc2wA, $qTz8C) { $this->context[$Cc2wA] = $qTz8C; } public function getContextValue($Cc2wA, $yiNQ6 = null) { if (isset($this->context[$Cc2wA])) { return $this->context[$Cc2wA]; } return $yiNQ6; } public function setContextUser($t9mtn) { $this->setContextValue('user', $t9mtn); } public function getContextUser($Cc2wA = null, $yiNQ6 = null) { goto cTxtm; cTxtm: $t9mtn = $this->getContextValue('user'); goto DWjsQ; m5dCm: return isset($t9mtn[$Cc2wA]) ? $t9mtn[$Cc2wA] : $yiNQ6; goto keIeN; DWjsQ: if (null === $Cc2wA) { return $t9mtn; } goto m5dCm; keIeN: } public function getContextUserId() { return $this->getContextUser('id'); } public function isContextUserBiz($UegGl) { $t9mtn = $this->getContextUser(); return $t9mtn && $t9mtn['biz'] == $UegGl; } public function amqp($OtCdv = null) { goto GfZQ6; jGFd1: $this->amqp = $OtCdv; goto CA8Of; GfZQ6: if (is_null($OtCdv)) { return $this->amqp; } goto jGFd1; CA8Of: return $this; goto WOIn1; WOIn1: } public function getAmqpValue($Cc2wA, $yiNQ6 = null) { if (isset($this->amqp[$Cc2wA])) { return $this->amqp[$Cc2wA]; } return $yiNQ6; } public function data($XWlC_ = null) { goto gn7VS; gn7VS: if (is_null($XWlC_)) { return $this->data; } goto yzM1W; yzM1W: $this->data = $XWlC_; goto QyXt8; QyXt8: return $this; goto veDm9; veDm9: } public function getDataValue($Cc2wA, $yiNQ6 = null) { if (isset($this->data[$Cc2wA])) { return $this->data[$Cc2wA]; } return $yiNQ6; } public function getDataInteger($Cc2wA, $yiNQ6 = 0) { return intval($this->getDataValue($Cc2wA, $yiNQ6)); } public function getDataType($fQQOm, $Cc2wA, $yiNQ6 = null) { goto NMicT; ba7Wk: foreach ($ZqYpj as $U8G_W => $gghxW) { if ($qTz8C == $U8G_W) { return $U8G_W; } } goto jzbDW; NMicT: $qTz8C = $this->getDataValue($Cc2wA, $yiNQ6); goto tmWWS; tmWWS: $ZqYpj = $fQQOm::getList(); goto ba7Wk; jzbDW: return $yiNQ6; goto LmGSV; LmGSV: } public function getDataTrimString($Cc2wA, $yiNQ6 = null) { return trim($this->getDataValue($Cc2wA, $yiNQ6)); } public function toJson() { goto PExr9; kNS8t: return SerializeUtil::jsonEncode($jGMz8); goto ElgOt; TGOOt: if (!empty($this->data)) { $jGMz8['data'] = $this->data; } goto kNS8t; I8OJ0: $jGMz8['type'] = $this->type; goto TGOOt; PExr9: $jGMz8 = array(); goto I8OJ0; ElgOt: } public function toAmqpJson() { goto ZR0QZ; BR8p6: $jGMz8['type'] = $this->type; goto y4EYS; vzzx7: if (!empty($this->amqp)) { $jGMz8['amqp'] = $this->amqp; } goto B3SN9; y4EYS: if (!empty($this->data)) { $jGMz8['data'] = $this->data; } goto vzzx7; B3SN9: return SerializeUtil::jsonEncode($jGMz8); goto XaUZU; ZR0QZ: $jGMz8 = array(); goto BR8p6; XaUZU: } public static function parse($AF6tQ) { goto yN2B5; ujGGq: if (isset($AF6tQ['type'])) { $miOiF->type = $AF6tQ['type']; } goto Z4b_f; Z4b_f: if (isset($AF6tQ['data'])) { $miOiF->data = $AF6tQ['data']; } goto jxazU; yN2B5: if (is_string($AF6tQ)) { $AF6tQ = @json_decode($AF6tQ, true); } goto CA9xp; Y0YgF: return $miOiF; goto Y0dS1; jxazU: if (isset($AF6tQ['amqp'])) { $miOiF->amqp = $AF6tQ['amqp']; } goto Y0YgF; CA9xp: if (empty($AF6tQ)) { return null; } goto U0u0Z; U0u0Z: $miOiF = new ChatMsg(); goto ujGGq; Y0dS1: } }