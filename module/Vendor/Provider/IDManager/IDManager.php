<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\IDManager; class IDManager { private static $instances = array(); public static function register($yHanX) { self::$instances[] = $yHanX; } public static function all() { foreach (self::$instances as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$instances[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$instances[$U8G_W] = app($gghxW); } } } return self::$instances; } public static function get($rfBQu) { goto cuV14; Isywv: foreach (self::all() as $SllOg) { if ($SllOg->name() == $rfBQu) { return $SllOg; } } goto u6Tx1; cuV14: $rfBQu = modstart_config($rfBQu, $rfBQu); goto Isywv; u6Tx1: return null; goto U0jRU; U0jRU: } }