<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Web\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Session; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; class SessionController extends Controller { public function index() { goto SzWaE; EZeML: Session::setId($sM_HX); goto kt3bc; bFXjt: $sM_HX = $ErQts->getTrimString('api_token'); goto wiJHc; h2Ziy: return Response::redirect($mDpIY); goto bLtIw; wiJHc: $mDpIY = $ErQts->getTrimString('redirect'); goto kht61; kht61: BizException::throwsIfEmpty('api_token 为空', $sM_HX); goto suGmn; kt3bc: Session::start(); goto h2Ziy; SzWaE: $ErQts = InputPackage::buildFromInput(); goto bFXjt; suGmn: BizException::throwsIfEmpty('redirect 为空', $mDpIY); goto u26ks; u26ks: BizException::throwsIf('session 初始化失败', !Session::isValidId($sM_HX)); goto EZeML; bLtIw: } }