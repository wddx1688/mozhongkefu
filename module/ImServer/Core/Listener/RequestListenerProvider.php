<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Listener; class RequestListenerProvider { private static $list = array(); private static $init = false; public static function register($yHanX) { self::$list[] = $yHanX; } public static function all() { if (!self::$init) { self::$init = true; foreach (self::$list as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$list[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$list[$U8G_W] = app($gghxW); } } } } return self::$list; } }