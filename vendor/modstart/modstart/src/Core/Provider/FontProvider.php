<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Provider; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\FileUtil; class FontProvider { private static $list = array(DefaultFontProvider::class); use ProviderTrait; public static function firstLocalPathOrFail() { goto OeDSD; N_iEL: return FileUtil::savePathToLocalTemp($nwt7t, 'ttf', true); goto NPs4K; Y4ogI: $nwt7t = $xqqfG->path(); goto N_iEL; c15bo: BizException::throwsIfEmpty('FontProvider Empty', $xqqfG); goto Y4ogI; OeDSD: $xqqfG = self::first(); goto c15bo; NPs4K: } }