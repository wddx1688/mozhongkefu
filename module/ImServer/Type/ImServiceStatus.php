<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImServiceStatus implements BaseType { const CREATED = 1; const QUEUE = 2; const PROCESSING = 3; const PROCESSED = 4; public static function getList() { return array(self::CREATED => '新创建', self::QUEUE => '排队中', self::PROCESSING => '正在会话', self::PROCESSED => '会话结束'); } }