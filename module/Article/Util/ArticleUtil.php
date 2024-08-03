<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Util; use Illuminate\Support\Facades\Cache; use ModStart\Core\Dao\ModelUtil; use Module\Article\Type\ArticlePosition; class ArticleUtil { const CACHE_KEY_PREFIX = 'article:'; public static function buildRecord($yWi_I) { goto w3yTv; yCkLy: return $yWi_I; goto Go4DI; JWXK1: $yWi_I['_url'] = self::url($yWi_I); goto yCkLy; w3yTv: if (empty($yWi_I)) { return $yWi_I; } goto JWXK1; Go4DI: } public static function url($yWi_I) { if ($yWi_I['alias']) { return modstart_web_url('article/' . $yWi_I['alias']); } return modstart_web_url('article/' . $yWi_I['id']); } public static function get($vWdBd) { $E1j2M = ModelUtil::get('article', $vWdBd); return self::buildRecord($E1j2M); } public static function getByAlias($jJtRk) { return self::buildRecord(ModelUtil::get('article', array('alias' => $jJtRk))); } public static function listByPosition($s2RTs = 'home') { $EnI2D = ModelUtil::model('article')->where(array('position' => $s2RTs))->orderBy('sort', 'asc')->get()->toArray(); return array_map(function ($AVLNU) { return self::buildRecord($AVLNU); }, $EnI2D); } public static function listByPositionWithCache($s2RTs = 'home', $cp12z = 600) { return Cache::remember(self::CACHE_KEY_PREFIX . $s2RTs, $cp12z, function () use($s2RTs) { return self::listByPosition($s2RTs); }); } public static function clearCache() { foreach (ArticlePosition::getList() as $U8G_W => $HdyS4) { Cache::forget(self::CACHE_KEY_PREFIX . $U8G_W); } } }