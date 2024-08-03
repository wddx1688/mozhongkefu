<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider; trait BizTrait { private static $list = array(); public static function register($UegGl) { self::$list[] = $UegGl; } public static function registerAll(...$VZtiX) { foreach ($VZtiX as $UegGl) { self::register($UegGl); } } public static function listAll() { foreach (self::$list as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$list[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$list[$U8G_W] = app($gghxW); } } } return self::$list; } public static function getByName($rfBQu) { foreach (self::listAll() as $AVLNU) { if ($AVLNU->name() == $rfBQu) { return $AVLNU; } } return null; } public static function allMap() { return array_build(self::listAll(), function ($U8G_W, $gghxW) { return array($gghxW->name(), $gghxW->title()); }); } public static function allMapEnabled() { return array_build(array_filter(self::listAll(), function ($gghxW) { return $gghxW->enable(); }), function ($U8G_W, $gghxW) { return array($gghxW->name(), $gghxW->title()); }); } }