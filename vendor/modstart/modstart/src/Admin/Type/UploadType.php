<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Type; use ModStart\Core\Type\BaseType; class UploadType implements BaseType { const USER = 1; const SYSTEM = 2; public static function getList() { return array(self::USER => '用户文件', self::SYSTEM => '系统文件'); } }