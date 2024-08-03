<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LBS; use Module\Vendor\Provider\ProviderTrait; class IpProvider { use ProviderTrait; public static function all() { return self::listAll(); } public static function get($rfBQu) { return self::getByName($rfBQu); } public static function first() { foreach (self::all() as $yHanX) { return $yHanX; } return null; } public static function firstResponse($Vzm8o) { goto KxhcP; bx3Bq: if (!$yHanX) { return null; } goto RGZRx; KxhcP: $yHanX = self::first(); goto bx3Bq; RGZRx: return $yHanX->getLocation($Vzm8o); goto VH2C2; VH2C2: } public static function firstResponseKey($Vzm8o, $rKRDI = array('province')) { goto prDvC; prDvC: $BMfVa = self::firstResponse($Vzm8o); goto U6wwk; IcDlu: return join('', $FEjaa); goto xr3p4; Sjztp: $FEjaa = array(); goto JGPhc; JGPhc: foreach ($rKRDI as $Cc2wA) { $FEjaa[] = $BMfVa->{$Cc2wA}; } goto IcDlu; U6wwk: if (empty($BMfVa)) { return ''; } goto Sjztp; xr3p4: } }