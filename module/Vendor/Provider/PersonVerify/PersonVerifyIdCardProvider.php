<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\PersonVerify; use Module\Vendor\Provider\ProviderTrait; class PersonVerifyIdCardProvider { use ProviderTrait; public static function all() { return self::listAll(); } public static function get($rfBQu) { return self::getByName($rfBQu); } public static function first() { foreach (self::all() as $yHanX) { return $yHanX; } return null; } public static function firstResponse($rfBQu, $W_3E0, $uZEpM = array()) { goto EIWB7; c2Ere: if (!$yHanX) { return null; } goto zBW83; zBW83: return $yHanX->verify($rfBQu, $W_3E0, $uZEpM); goto mD8j2; EIWB7: $yHanX = self::first(); goto c2Ere; mD8j2: } }