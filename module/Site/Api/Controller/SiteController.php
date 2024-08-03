<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Site\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Input\Response; class SiteController extends Controller { public function contact() { goto VOwkq; bHJ0d: return Response::generateSuccessData($XWlC_); goto eyxY3; pxn0C: $XWlC_['qrcode'] = modstart_config('Site_ContactQrcode', ''); goto fNFbW; aE1cE: $XWlC_['phone'] = modstart_config('Site_ContactPhone', ''); goto bRfx1; szTL8: $XWlC_['email'] = modstart_config('Site_ContactEmail', ''); goto aE1cE; fNFbW: if ($XWlC_['qrcode']) { $XWlC_['qrcode'] = AssetsUtil::fixFull($XWlC_['qrcode']); } goto bHJ0d; VOwkq: $XWlC_ = array(); goto szTL8; bRfx1: $XWlC_['address'] = modstart_config('Site_ContactAddress', ''); goto pxn0C; eyxY3: } }