<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use Module\Vendor\Provider\RichContent\AbstractRichContentProvider; use Module\Vendor\Provider\RichContent\UEditorRichContentProvider; class RichContentProvider { private static $instances = array(UEditorRichContentProvider::class); public static function register($yHanX) { self::$instances[] = $yHanX; } public static function all() { foreach (self::$instances as $U8G_W => $gghxW) { if ($gghxW instanceof \Closure) { self::$instances[$U8G_W] = call_user_func($gghxW); } else { if (is_string($gghxW)) { self::$instances[$U8G_W] = app($gghxW); } } } return self::$instances; } public static function getByName($rfBQu) { foreach (self::all() as $X0c2E) { if ($X0c2E->name() == $rfBQu) { return $X0c2E; } } return null; } }