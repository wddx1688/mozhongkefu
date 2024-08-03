<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImUserFriendStatus implements BaseType { const INACTIVE = 1; const ACTIVE = 2; public static function getList() { return array(self::INACTIVE => '已解除好友关系', self::ACTIVE => '好友状态'); } }