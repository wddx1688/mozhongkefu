<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use Module\Banner\Util\BannerUtil; class BannerController extends Controller { public function get() { goto T64g4; T64g4: $ErQts = InputPackage::buildFromInput(); goto IA8Pw; GGd8c: return Response::generateSuccessData($ZqYpj); goto qibgy; IA8Pw: $s2RTs = $ErQts->getTrimString('position'); goto BglKi; BglKi: $ZqYpj = BannerUtil::listByPositionWithCache($s2RTs); goto M3FHO; M3FHO: foreach ($ZqYpj as $U8G_W => $gghxW) { $ZqYpj[$U8G_W]['image'] = AssetsUtil::fixFull($gghxW['image']); } goto GGd8c; qibgy: } }