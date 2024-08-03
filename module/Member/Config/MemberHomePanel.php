<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; class MemberHomePanel { private static $list = array(); public static function register($AVLNU) { self::$list[] = $AVLNU; } public static function get() { foreach (self::$list as $U8G_W => $AVLNU) { if ($AVLNU instanceof \Closure) { self::$list[$U8G_W] = call_user_func($AVLNU); } } return self::$list; } }