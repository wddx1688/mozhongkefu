<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Schedule; use ModStart\Core\Type\BaseType; class RunStatus implements BaseType { const RUNNING = 1; const SUCCESS = 2; const FAILED = 3; public static function getList() { return array(self::RUNNING => '运行中', self::SUCCESS => '成功', self::FAILED => '失败'); } }