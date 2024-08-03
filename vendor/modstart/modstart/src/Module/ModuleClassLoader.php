<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Module; use Composer\Autoload\ClassLoader; class ModuleClassLoader { private static $loader = null; private static $namespacesAdded = array(); private static function loaderInit() { if (null == self::$loader) { self::$loader = app(ClassLoader::class); self::$loader->register(true); } } public static function addClass($cVwn0, $Z3orD) { self::loaderInit(); self::$loader->addClassMap(array($cVwn0 => $Z3orD)); } public static function addNamespace($b896h, $hCl98) { goto PaUun; jDs1b: if (!ends_with($b896h, '\\')) { $b896h = $b896h . '\\'; } goto F0058; zccDK: self::$loader->addPsr4($b896h, array($hCl98)); goto Ab2fr; F0058: $z091W[$b896h] = $hCl98; goto zccDK; PaUun: self::loaderInit(); goto jDs1b; Ab2fr: } public static function addNamespaceIfMissing($b896h, $hCl98) { if (!self::hasNamespace($b896h)) { self::addNamespace($b896h, $hCl98); } } public static function hasNamespace($b896h) { if (!ends_with($b896h, '\\')) { $b896h = $b896h . '\\'; } return isset($z091W[$b896h]); } }