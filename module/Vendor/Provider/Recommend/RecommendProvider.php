<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Recommend; use Module\Vendor\Provider\ProviderTrait; class RecommendProvider { use ProviderTrait; public static function randomItemBizIds($UegGl, $qzstR, $LIhQG = 1, $BR1jO = array(), $RgJUd = array(), $T9jzA = array(), $uZEpM = array()) { goto BS0RG; k3T4V: if (isset($FZUh3['data']['bizIds'])) { return $FZUh3['data']['bizIds']; } goto r2QEP; r2QEP: return array(); goto ukL_V; AFaAQ: if (!$yHanX) { return array(); } goto W8zEy; BS0RG: $UegGl = RecommendBiz::getByName($UegGl); goto thZlN; Ibznn: $yHanX = self::getByName($UegGl->providerName()); goto AFaAQ; thZlN: if (!$UegGl) { return array(); } goto Ibznn; W8zEy: $FZUh3 = $yHanX->randomItem($UegGl->name(), $qzstR, $LIhQG, $BR1jO, $RgJUd, $T9jzA, $uZEpM); goto k3T4V; ukL_V: } }