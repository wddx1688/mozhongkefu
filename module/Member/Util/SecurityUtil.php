<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use Module\Vendor\Provider\Captcha\CaptchaProvider; use Module\Vendor\Provider\Captcha\DefaultCaptchaProvider; class SecurityUtil { public static function registerCaptchaProvider() { goto Zg9V6; IfpR4: $yHanX = CaptchaProvider::get($rfBQu); goto jraJ2; jraJ2: if ($yHanX && $yHanX instanceof DefaultCaptchaProvider) { return null; } goto jX3Nt; uO7Hw: return $yHanX; goto TGo23; g_DDm: if (empty($rfBQu)) { return null; } goto IfpR4; jX3Nt: $yHanX->setParam('onValidate', 'window.__memberCheckCaptcha'); goto uO7Hw; Zg9V6: $rfBQu = modstart_config('Member_RegisterCaptchaProvider', null); goto g_DDm; TGo23: } public static function loginCaptchaProvider() { goto AcR_0; YaFF4: if ($yHanX && $yHanX instanceof DefaultCaptchaProvider) { return null; } goto DXptX; eONHE: $yHanX = CaptchaProvider::get($rfBQu); goto YaFF4; Uj4DR: if (empty($rfBQu)) { return null; } goto eONHE; AcR_0: $rfBQu = modstart_config('loginCaptchaProvider', null); goto Uj4DR; DXptX: return $yHanX; goto UhXiC; UhXiC: } }