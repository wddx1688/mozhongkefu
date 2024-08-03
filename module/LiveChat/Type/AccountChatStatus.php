<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Type; use ModStart\Core\Type\BaseType; class AccountChatStatus implements BaseType { const OFFLINE = 1; const ONLINE = 2; public static function getList() { return array(self::OFFLINE => '离线', self::ONLINE => '在线'); } }