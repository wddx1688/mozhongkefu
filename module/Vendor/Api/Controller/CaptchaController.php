<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\Response; use ModStart\Misc\Captcha\CaptchaFacade; class CaptchaController extends Controller { public function image() { $iXslQ = CaptchaFacade::create('default'); return Response::generate(0, 'ok', array('image' => 'data:image/png;base64,' . base64_encode($iXslQ->getOriginalContent()))); } }