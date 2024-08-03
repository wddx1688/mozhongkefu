<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Type; use ModStart\Core\Type\BaseType; use ModStart\Core\Util\AgentUtil; class DeviceType implements BaseType { const PC = 1; const MOBILE = 2; public static function getList() { return array(self::PC => 'PC', self::MOBILE => '移动端'); } public static function current() { if (AgentUtil::isMobile()) { return self::MOBILE; } return self::PC; } }