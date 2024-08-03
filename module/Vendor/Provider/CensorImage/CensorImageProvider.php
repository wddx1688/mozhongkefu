<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\CensorImage; use ModStart\Core\Exception\BizException; class CensorImageProvider { private static $instances = array(DefaultCensorImageProvider::class); public static function register($yHanX) { self::$instances[] = $yHanX; } public static function all() { foreach (self::$instances as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$instances[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$instances[$U8G_W] = app($gghxW); } } } return self::$instances; } public static function nameTitleMap() { return array_build(self::all(), function ($U8G_W, $yHanX) { return array($yHanX->name(), $yHanX->title()); }); } public static function get($rfBQu) { foreach (self::all() as $AVLNU) { if ($AVLNU->name() == $rfBQu) { return $AVLNU; } } return null; } }