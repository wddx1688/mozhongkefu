<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Type; use ModStart\Core\Type\BaseType; class AdminLogType implements BaseType { const INFO = 1; const ERROR = 2; public static function getList() { return array(self::INFO => L('Info'), self::ERROR => L('Error')); } }