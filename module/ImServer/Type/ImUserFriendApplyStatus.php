<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImUserFriendApplyStatus implements BaseType { const WAIT_RESOLVE = 1; const AGREED = 2; public static function getList() { return array(self::WAIT_RESOLVE => '等待处理', self::AGREED => '已同意'); } }