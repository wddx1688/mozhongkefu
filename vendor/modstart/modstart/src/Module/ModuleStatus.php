<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Module; use ModStart\Core\Type\BaseType; class ModuleStatus implements BaseType { const INSTALLED = 'installed'; const NOT_INSTALLED = 'notInstalled'; public static function getList() { return array(self::INSTALLED => L('Installed'), self::NOT_INSTALLED => L('Not Installed')); } }