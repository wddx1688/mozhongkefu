<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Util; use ModStart\ModStart; use ModStart\Module\ModuleManager; class ModuleUtil { public static function modules() { goto Yk2i_; PAzKi: foreach (ModuleManager::listAllEnabledModules() as $E1j2M => $HdyS4) { goto ZWT04; xthSP: if (!$hEapL) { continue; } goto SpIsy; SpIsy: $f6JWK[] = "{$E1j2M}:{$hEapL['version']}"; goto Vv0eS; ZWT04: $hEapL = ModuleManager::getModuleBasic($E1j2M); goto xthSP; Vv0eS: } goto a1bWq; JeH0T: $f6JWK[] = 'ModStart:' . ModStart::$version; goto PAzKi; a1bWq: return $f6JWK; goto ZSx8X; Yk2i_: $f6JWK = array(); goto JeH0T; ZSx8X: } }