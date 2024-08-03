<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImChatType implements BaseType { const SINGLE = 1; const GROUP = 2; const SERVICE = 3; public static function getList() { return array(self::SINGLE => '私聊', self::GROUP => '群聊', self::SERVICE => '客服'); } }