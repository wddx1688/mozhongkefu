<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SmsTemplate; class SmsTemplateProvider { private static $instances = array(); public static function register($yHanX) { self::$instances[] = $yHanX; } public static function all() { foreach (self::$instances as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$instances[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$instances[$U8G_W] = app($gghxW); } } } return self::$instances; } public static function map() { goto S2SVg; o6ufT: return $VQao2; goto h6XQI; ohk01: foreach (self::all() as $AVLNU) { $VQao2[$AVLNU->name()] = array('name' => $AVLNU->name(), 'title' => $AVLNU->title(), 'description' => $AVLNU->description(), 'example' => $AVLNU->example()); } goto o6ufT; S2SVg: $VQao2 = array(); goto ohk01; h6XQI: } }