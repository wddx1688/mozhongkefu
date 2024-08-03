<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Util; use Illuminate\Support\Facades\Cache; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Dao\ModelUtil; use Module\Banner\Type\BannerPosition; class BannerUtil { const CACHE_KEY_PREFIX = 'banner:'; public static function listByPosition($s2RTs = 'home') { goto Cjl2a; T3EMf: return $EnI2D; goto nJ3Nw; xSa63: foreach ($EnI2D as $k8Rwr => $gghxW) { if ($gghxW['image']) { $EnI2D[$k8Rwr]['image'] = AssetsUtil::fixFull($gghxW['image']); } if ($gghxW['video']) { $EnI2D[$k8Rwr]['video'] = AssetsUtil::fixFull($gghxW['video']); } } goto T3EMf; Cjl2a: $EnI2D = ModelUtil::model('banner')->where(array('position' => $s2RTs))->orderBy('sort', 'asc')->get()->toArray(); goto xSa63; nJ3Nw: } public static function listByPositionWithCache($s2RTs = 'home', $cp12z = 60) { return Cache::remember(self::CACHE_KEY_PREFIX . $s2RTs, $cp12z, function () use($s2RTs) { return self::listByPosition($s2RTs); }); } public static function insertIfMissing($s2RTs, $XWlC_) { $XWlC_['position'] = $s2RTs; if (!ModelUtil::exists('banner', $XWlC_)) { ModelUtil::insert('banner', $XWlC_); } } public static function hasData($s2RTs = 'home') { return !empty(self::listByPositionWithCache($s2RTs)); } public static function clearCache() { foreach (BannerPosition::getList() as $U8G_W => $HdyS4) { Cache::forget(self::CACHE_KEY_PREFIX . $U8G_W); } } }