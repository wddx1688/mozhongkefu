<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Misc\Captcha; use Illuminate\Support\Facades\Facade; class CaptchaFacade extends Facade { protected static function getFacadeAccessor() { return 'captcha'; } }