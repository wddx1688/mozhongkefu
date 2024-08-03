<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Ocr; use Module\Vendor\Provider\ProviderTrait; class OcrProvider { use ProviderTrait; public static function all() { return self::listAll(); } public static function get($rfBQu) { return self::getByName($rfBQu); } public static function first() { foreach (self::all() as $yHanX) { return $yHanX; } return null; } }