<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LBS; use Module\Vendor\Provider\ProviderTrait; class AddressParseProvider { use ProviderTrait; public static function firstResponse($n3GvS) { goto prsvG; rtXwM: if (!$yHanX) { return null; } goto rYKZk; prsvG: $yHanX = self::first(); goto rtXwM; rYKZk: return $yHanX->parse($n3GvS); goto DGf6b; DGf6b: } }