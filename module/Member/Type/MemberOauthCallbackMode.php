<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Type; use ModStart\Core\Type\BaseType; class MemberOauthCallbackMode implements BaseType { const View = 'View'; const AutoBind = 'AutoBind'; public static function getList() { return array(self::View => '查看', self::AutoBind => '绑定'); } }