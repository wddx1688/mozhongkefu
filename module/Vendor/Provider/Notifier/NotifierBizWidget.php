<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; class NotifierBizWidget { private static $list = array(); public static function register($UegGl, $xy3eh) { self::$list[] = array('biz' => $UegGl, 'title' => $xy3eh); } public static function get() { return self::$list; } }