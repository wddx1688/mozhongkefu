<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class SerializeUtil { public static function jsonObject($nx179) { if (empty($nx179)) { $nx179 = new \stdClass(); } return json_encode($nx179, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } public static function jsonEncodeObject($nx179, $iVFbz = 0) { return json_encode($nx179, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT | $iVFbz); } public static function jsonEncode($nx179, $iVFbz = 0) { return json_encode($nx179, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | $iVFbz); } public static function jsonEncodePretty($nx179, $iVFbz = 0) { return json_encode($nx179, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | $iVFbz); } public static function jsonDecode($nx179) { return @json_decode($nx179, true); } }