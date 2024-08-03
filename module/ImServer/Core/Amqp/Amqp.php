<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Amqp; use Module\ImServer\Core\Message\ChatMsg; class Amqp { public static function send($dXNTZ, $Dn80G) { if (null === $Dn80G) { $Dn80G = array(); } AmqpFactory::make()->send(ChatMsg::make($dXNTZ)->data($Dn80G)); } public static function sendMsg(ChatMsg $miOiF) { AmqpFactory::make()->send($miOiF); } }