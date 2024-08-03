<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Module\Banner\Type\BannerType; use Module\Banner\Util\BannerUtil; class MBanner { public static function all($s2RTs = 'home') { return BannerUtil::listByPositionWithCache($s2RTs); } public static function allImage($s2RTs) { $EnI2D = self::all($s2RTs); return array_values(array_filter($EnI2D, function ($AVLNU) { return in_array($AVLNU['type'], array(BannerType::IMAGE, BannerType::IMAGE_TITLE_SLOGAN_LINK)); })); } }