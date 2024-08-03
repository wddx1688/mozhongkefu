<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\LazyValue; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Input\Response; use ModStart\Core\Util\SerializeUtil; use Module\Vendor\Util\CacheUtil; class LazyValueUtil { public static function hash($Cc2wA, $oZLCv) { return CacheUtil::rememberForever("LazyValue.{$Cc2wA}", function () use($oZLCv) { return md5(serialize($oZLCv())); }); } public static function notifyChange($Cc2wA) { CacheUtil::forget("LazyValue.{$Cc2wA}"); } public static function status(&$qTz8C) { foreach ($qTz8C as $gghxW) { if (null === $gghxW) { return 'running'; } } return 'finish'; } public static function generateResponseWithStatus($qTz8C) { return Response::generate(0, 'ok', array('status' => LazyValueUtil::status($qTz8C), 'value' => $qTz8C)); } public static function get($Cc2wA, $uZEpM, $x8hPA, $IX126 = 86400) { goto FMbHM; NOITr: return @json_decode($VR35a['value'], true); goto q8irY; VsymN: if (empty($VR35a)) { goto WORNN; WORNN: ModelUtil::insert('lazy_value', array('key' => $Cc2wA, 'param' => SerializeUtil::jsonEncode($uZEpM), 'expire' => time() + $x8hPA, 'lifeExpire' => time() + $IX126, 'cacheSeconds' => $x8hPA, 'value' => null)); goto wjIN7; iIerD: return null; goto u9TH_; wjIN7: LazyValueJob::create($Cc2wA, $uZEpM, $x8hPA); goto iIerD; u9TH_: } goto xD_Ll; FMbHM: $VSP7l = array('key' => $Cc2wA, 'param' => SerializeUtil::jsonEncode($uZEpM)); goto PXAJW; PXAJW: $VR35a = ModelUtil::get('lazy_value', $VSP7l); goto VsymN; xD_Ll: if ($VR35a['expire'] < time()) { ModelUtil::update('lazy_value', $VSP7l, array('expire' => time() + $x8hPA, 'lifeExpire' => time() + $IX126, 'cacheSeconds' => $x8hPA)); LazyValueJob::createRefresh($Cc2wA, $uZEpM, $x8hPA); } goto NOITr; q8irY: } public static function watch() { goto gammS; B3LZl: $PIrls = ModelUtil::model('lazy_value')->where('expire', '<', time())->get(array('key', 'param', 'cacheSeconds')); goto SW1mO; gammS: ModelUtil::model('lazy_value')->where('lifeExpire', '<', time())->delete(); goto B3LZl; SW1mO: foreach ($PIrls as $u0rBB) { LazyValueJob::createRefresh($u0rBB->key, @json_decode($u0rBB->param, true), $u0rBB->cacheSeconds); } goto kjMGm; kjMGm: } }