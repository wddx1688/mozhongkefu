<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Type; use Module\Banner\Biz\BannerPositionBiz; class BannerPositionRemark extends BannerPosition { public static function getList() { goto IoeBs; wRLWA: return $VQao2; goto Zz3C9; IoeBs: $VQao2 = parent::getList(); goto mpEmg; mpEmg: foreach ($VQao2 as $U8G_W => $gghxW) { $UegGl = BannerPositionBiz::get($U8G_W); if ($UegGl && $UegGl->remark()) { $VQao2[$U8G_W] = $gghxW . '(' . $UegGl->remark() . ')'; } } goto wRLWA; Zz3C9: } }