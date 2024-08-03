<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SearchBox; use Module\Vendor\Provider\ProviderTrait; class SearchBoxProvider { use ProviderTrait; public static function all() { goto RVeTV; CrR0b: return $EnI2D; goto e0lF0; RVeTV: $EnI2D = self::listAll(); goto eLDu4; eLDu4: usort($EnI2D, function ($S03jg, $mWTFP) { if ($S03jg->order() == $mWTFP->order()) { return 0; } return $S03jg->order() > $mWTFP->order() ? 1 : -1; }); goto CrR0b; e0lF0: } public static function get($rfBQu) { return self::getByName($rfBQu); } public static function count() { return count(self::all()); } }