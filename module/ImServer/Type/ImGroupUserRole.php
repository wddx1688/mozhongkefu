<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImGroupUserRole implements BaseType { const USER = 1; const ADMIN = 2; const OWNER = 3; public static function getList() { return array(self::USER => '普通成员', self::ADMIN => '管理员', self::OWNER => '群主'); } }