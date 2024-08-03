<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; use Module\Vendor\Provider\BizTrait; class BannerPositionBiz { use BizTrait; public static function registerQuick($rfBQu, $xy3eh, $bv12A = null) { self::register(QuickBannerPositionBiz::make($rfBQu, $xy3eh, $bv12A)); } public static function all() { return self::listAll(); } public static function get($rfBQu) { return self::getByName($rfBQu); } }