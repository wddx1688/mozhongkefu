<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Captcha; class CaptchaUtil { public static function get() { goto SCbEV; E6YC1: if (null === $X0c2E) { goto mXkkK; mXkkK: $HcvYd = config('CaptchaProviderDriver'); goto SxbYs; DirYF: $X0c2E = app($HcvYd); goto jUJB_; SxbYs: if (empty($HcvYd)) { $HcvYd = DefaultCaptchaProvider::class; } goto DirYF; jUJB_: } goto Sf556; Sf556: return $X0c2E; goto Pw8G7; SCbEV: static $X0c2E = null; goto E6YC1; Pw8G7: } }