<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core; use GatewayWorker\Lib\Gateway; use Module\ImServer\Core\Message\ChatMsg; class GatewayUtil { public static function sendToAll($COuxF, ChatMsg $miOiF) { $COuxF = array_unique($COuxF); if (!empty($COuxF)) { Gateway::sendToAll($miOiF->toJson(), $COuxF); } } public static function send($StcZM, ChatMsg $miOiF) { Gateway::sendToClient($StcZM, $miOiF->toJson()); } public static function sendCurrent(ChatMsg $miOiF) { Gateway::sendToCurrentClient($miOiF->toJson()); } public static function sendCurrentError($u7CPq) { self::sendCurrent(ChatMsg::makeError($u7CPq)); } }