<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Captcha; use Illuminate\Support\Facades\View; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Misc\Captcha\CaptchaFacade; class DefaultCaptchaProvider extends AbstractCaptchaProvider { public function name() { return 'default'; } public function title() { return '图片验证码'; } public function render() { return View::make('module::Vendor.View.widget.captcha.default')->render(); } public function validate() { goto RWKYz; M_996: if (!CaptchaFacade::check($iXslQ)) { return Response::generate(-1, '图片验证码错误', null, '[js]$(\'[data-captcha]\').click();'); } goto IXdxH; BnZNK: $iXslQ = $ErQts->getTrimString('captcha'); goto M_996; RWKYz: $ErQts = InputPackage::buildFromInput(); goto BnZNK; IXdxH: return Response::generateSuccess(); goto iel3N; iel3N: } }