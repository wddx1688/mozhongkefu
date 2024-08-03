<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Cache; use Illuminate\Support\Facades\Cache; class CacheUtil { private static function client() { return Cache::store(); } public static function rememberForever($Cc2wA, $oZLCv) { return self::client()->rememberForever($Cc2wA, $oZLCv); } public static function remember($Cc2wA, $iOLw_, $oZLCv) { return self::client()->remember($Cc2wA, intval($iOLw_ / 60), $oZLCv); } public static function forget($Cc2wA) { return self::client()->forget($Cc2wA); } public static function get($Cc2wA) { return self::client()->get($Cc2wA); } public static function put($Cc2wA, $qTz8C, $iOLw_) { self::client()->put($Cc2wA, $qTz8C, ceil($iOLw_ / 60)); } public static function forever($Cc2wA, $qTz8C) { self::client()->forever($Cc2wA, $qTz8C); } }