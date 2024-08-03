<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Biz; trait BizTrait { private static $list = array(); public static function register($UegGl) { self::$list[] = $UegGl; } public static function registerAll(...$VZtiX) { foreach ($VZtiX as $UegGl) { self::register($UegGl); } } public static function listAll() { foreach (self::$list as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$list[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$list[$U8G_W] = app($gghxW); } } } return self::$list; } private static function getByName($rfBQu) { foreach (self::all() as $AVLNU) { if ($AVLNU->name() == $rfBQu) { return $AVLNU; } } return null; } public static function allMap() { return array_build(self::all(), function ($U8G_W, $gghxW) { return array($gghxW->name(), $gghxW->title()); }); } }