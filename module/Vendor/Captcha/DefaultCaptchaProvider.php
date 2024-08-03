<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Captcha; use Illuminate\Support\Facades\View; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Misc\Captcha\CaptchaFacade; class DefaultCaptchaProvider extends AbstractCaptchaProvider { public function render() { return View::make('module::Vendor.View.widget.captcha.default')->render(); } public function validate() { goto wT4ee; wT4ee: $ErQts = InputPackage::buildFromInput(); goto rCd44; ZFJe1: return Response::generateSuccess(); goto MY0Ue; rCd44: $iXslQ = $ErQts->getTrimString('captcha'); goto DFRC4; DFRC4: if (!CaptchaFacade::check($iXslQ)) { return Response::generate(-1, '图片验证码错误', null, '[js]$(\'[data-captcha]\').click();'); } goto ZFJe1; MY0Ue: } }