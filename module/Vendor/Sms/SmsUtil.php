<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Sms; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Response; use Module\Vendor\Provider\SmsSender\SmsSenderProvider; class SmsUtil { public static function calcNumber($n3GvS) { return ceil(mb_strlen($n3GvS) / 67); } public static function parseContent($mPYOc, $aOaiS = array()) { goto WMIKe; q5Bv6: return str_replace($GZ0ou, $KqVai, $mPYOc); goto rzP19; W9eeN: foreach ($aOaiS as $U8G_W => $gghxW) { $GZ0ou[] = '{' . $U8G_W . '}'; $KqVai[] = $gghxW; } goto q5Bv6; SxMdp: $KqVai = array(); goto W9eeN; WMIKe: $GZ0ou = array(); goto SxMdp; rzP19: } public static function parseTemplateParam($mPYOc) { preg_match_all('/\\{(.*?)\\}/', $mPYOc, $rGUSQ); return $rGUSQ[1]; } public static function replaceTemplate($mPYOc, $ujZqt = '#') { goto vDoR2; oem4u: foreach ($uZEpM as $gghxW) { if (is_string($ujZqt)) { $mPYOc = str_replace('{' . $gghxW . '}', $ujZqt . $gghxW . $ujZqt, $mPYOc); } else { $mPYOc = str_replace('{' . $gghxW . '}', call_user_func($ujZqt, $gghxW), $mPYOc); } } goto soKkx; soKkx: return $mPYOc; goto Mb7TF; vDoR2: $uZEpM = self::parseTemplateParam($mPYOc); goto oem4u; Mb7TF: } public static function templates() { $njxqq = array(array('name' => 'verify', 'title' => '验证码', 'desc' => '验证码模板变量为 code')); return $njxqq; } public static function send($jU6y9, $mPYOc, $NALde = array()) { goto DOre8; yDwA0: return Response::generateSuccess(); goto QWFtw; DOre8: $yHanX = app()->config->get('SmsSenderProvider'); goto diO2R; czsMd: $FZUh3 = SmsSenderProvider::get($yHanX)->send($jU6y9, $mPYOc, $NALde); goto SB6L8; diO2R: BizException::throwsIfEmpty('短信发送未设置', $yHanX); goto czsMd; SB6L8: BizException::throwsIfResponseError($FZUh3); goto yDwA0; QWFtw: } }