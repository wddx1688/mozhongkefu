<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data; use Illuminate\Support\Str; use ModStart\Core\Type\BaseType; class DataStorageType implements BaseType { private static $list = array('DataFile' => '本地存储'); public static function register($HQ4FM, $iqgWB) { self::$list[$HQ4FM] = $iqgWB; } public static function getList() { return self::$list; } public static function toDriverName($HQ4FM) { if (!Str::startsWith($HQ4FM, 'Data')) { $HQ4FM = 'Data' . $HQ4FM; } return 'DataStorage_' . $HQ4FM; } }