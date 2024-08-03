<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class PlatformUtil { const WINDOWS = 'windows'; const LINUX = 'linux'; const OSX = 'osx'; const UNKNOWN = 'unknown'; private static function name() { return strtoupper(PHP_OS); } public static function isWindows() { return substr(self::name(), 0, 3) == 'WIN'; } public static function isOsx() { return self::name() == 'DARWIN'; } public static function isLinux() { return self::name() == 'LINUX'; } public static function isType($t9GVj) { return in_array(self::type(), $t9GVj); } public static function type() { goto dww9A; uHTTp: if (self::isLinux()) { return self::LINUX; } goto xI77F; xI77F: return self::UNKNOWN; goto yMm9y; dww9A: if (self::isOsx()) { return self::OSX; } goto Utf0l; Utf0l: if (self::isWindows()) { return self::WINDOWS; } goto uHTTp; yMm9y: } }