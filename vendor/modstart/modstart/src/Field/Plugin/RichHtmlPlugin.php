<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field\Plugin; class RichHtmlPlugin { private static $list = array(); public static function reigster($farnG) { self::$list[] = $farnG; } public static function all() { foreach (self::$list as $dKmL2 => $farnG) { if (is_string($farnG)) { self::$list[$dKmL2] = app($farnG); } } return self::$list; } }