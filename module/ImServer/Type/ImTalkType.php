<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImTalkType implements BaseType { const TEXT = 1; const IMAGE = 2; const NOTICE = 100; public static function getList() { return array(self::TEXT => '文本', self::IMAGE => '图片', self::NOTICE => '通知'); } }