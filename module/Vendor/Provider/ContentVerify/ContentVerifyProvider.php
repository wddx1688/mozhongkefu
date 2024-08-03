<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\ContentVerify; class ContentVerifyProvider { private static $instances = array(); public static function register($yHanX) { self::$instances[] = $yHanX; } public static function all() { foreach (self::$instances as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$instances[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$instances[$U8G_W] = app($gghxW); } } } return self::$instances; } public static function get($rfBQu) { goto wu0Dj; wu0Dj: if (empty($rfBQu)) { return null; } goto I0YTX; eTizF: return null; goto auOJq; I0YTX: foreach (self::all() as $AVLNU) { if ($AVLNU->name() == $rfBQu) { return $AVLNU; } } goto eTizF; auOJq: } }