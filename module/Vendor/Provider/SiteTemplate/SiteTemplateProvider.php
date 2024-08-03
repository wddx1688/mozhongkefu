<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SiteTemplate; class SiteTemplateProvider { private static $instances = array(DefaultSiteTemplateProvider::class); public static function register($yHanX) { self::$instances[] = $yHanX; } public static function registerQuick($rfBQu, $xy3eh, $AJ7DM = null) { self::register(QuickSiteTemplateProvider::make($rfBQu, $xy3eh, $AJ7DM)); } public static function all() { foreach (self::$instances as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$instances[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$instances[$U8G_W] = app($gghxW); } } } return self::$instances; } public static function get($rfBQu) { foreach (self::all() as $yHanX) { if ($yHanX->name() == $rfBQu) { return $yHanX; } } return null; } public static function map() { return array_build(self::all(), function ($U8G_W, $gghxW) { return array($gghxW->name(), $gghxW->title()); }); } }