<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Type; use ModStart\Core\Type\BaseType; use ModStart\Module\ModuleManager; use Module\Nav\Biz\NavPositionBiz; class NavPosition implements BaseType { public static function getList() { return array_merge(ModuleManager::getModuleConfigKeyValueItems('Nav', 'position'), NavPositionBiz::allMap()); } public static function first() { goto r7kT2; n7Z80: return array_shift($rKRDI); goto QCh85; r7kT2: $ZqYpj = self::getList(); goto MQoxB; MQoxB: $rKRDI = array_keys($ZqYpj); goto n7Z80; QCh85: } }