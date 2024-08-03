<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use ModStart\Core\Exception\BizException; class MetaUtil { private static $supportKeys = array('APP_NAME'); public static function get($cANPj) { goto YyodL; bZ6Ip: if (isset($nNKj3[$cANPj])) { return $nNKj3[$cANPj]; } goto wo8of; wo8of: switch ($cANPj) { case 'APP_NAME': if (defined('\\App\\Constant\\AppConstant::APP_NAME')) { return \App\Constant\AppConstant::APP_NAME; } else { if (defined('\\App\\Constant\\AppConstant::APP')) { return \App\Constant\AppConstant::APP; } } return 'UnknownAppName'; } goto e6_3k; e6_3k: return '-'; goto gNx0c; Ctkyj: if (null === $nNKj3) { goto GKwEu; QqJRc: if (file_exists($Z3orD)) { $nNKj3 = @json_decode(file_get_contents($Z3orD), true); } goto MreNe; MreNe: if (empty($nNKj3)) { $nNKj3 = array(); } goto uvAHx; GKwEu: $Z3orD = base_path('meta.json'); goto QqJRc; uvAHx: } goto bZ6Ip; y7yRm: BizException::throwsIf('Meta信息不包含' . $cANPj, !in_array($cANPj, self::$supportKeys)); goto Ctkyj; YyodL: static $nNKj3 = null; goto y7yRm; gNx0c: } }