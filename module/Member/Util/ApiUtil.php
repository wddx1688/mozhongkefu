<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Module\ModuleManager; class ApiUtil { public static function config() { goto iapRL; fwYcY: $XWlC_['loginCaptchaProvider'] = $ts2Yv->get('loginCaptchaProvider'); goto Hk497; H8KnV: $XWlC_['Member_MoneyCashEnable'] = modstart_config('Member_MoneyCashEnable', false); goto oboqK; rpYQV: $XWlC_['oauthQQEnable'] = $ts2Yv->getBoolean('oauthQQEnable'); goto zBaut; F9vZL: $XWlC_['retrieveDisable'] = $ts2Yv->getBoolean('retrieveDisable'); goto o1tEp; z_gEv: $XWlC_['ssoClientEnable'] = $ts2Yv->getBoolean('ssoClientEnable', false); goto mVSah; e1PXE: $XWlC_['Member_MoneyChargeEnable'] = modstart_config('Member_MoneyChargeEnable', false); goto H8KnV; mVSah: $XWlC_['loginCaptchaEnable'] = $ts2Yv->getBoolean('loginCaptchaEnable', false); goto fwYcY; dU2mn: $XWlC_['Member_VipEnable'] = ModuleManager::getModuleConfig('Member', 'vipEnable', false); goto YECUM; fzh5e: $XWlC_['Member_ProfilePhoneEnable'] = $ts2Yv->getBoolean('Member_ProfilePhoneEnable', false); goto dU2mn; S7tRQ: $XWlC_ = array(); goto z_gEv; lGw2H: return $XWlC_; goto uVZJJ; WIHGY: $XWlC_['Member_RegisterPhoneEnable'] = $ts2Yv->getBoolean('Member_RegisterPhoneEnable', false); goto SYJPb; zBaut: $XWlC_['oauthWeiboEnable'] = $ts2Yv->getBoolean('oauthWeiboEnable'); goto mQ79p; NLg2x: $XWlC_['oauthWechatMobileEnable'] = $ts2Yv->getBoolean('oauthWechatMobileEnable'); goto rpYQV; mQ79p: $XWlC_['Member_OauthBindPhoneEnable'] = $ts2Yv->getBoolean('Member_OauthBindPhoneEnable', false); goto XlofG; AlTdE: $XWlC_['Member_ProfileEmailEnable'] = $ts2Yv->getBoolean('Member_ProfileEmailEnable', false); goto fzh5e; l8Rir: $XWlC_['Member_PrivacyEnable'] = $ts2Yv->getBoolean('Member_PrivacyEnable', false); goto xMBL9; X9D1w: $XWlC_['Member_AgreementTitle'] = $ts2Yv->get('Member_AgreementTitle'); goto l8Rir; XlofG: $XWlC_['Member_OauthBindEmailEnable'] = $ts2Yv->getBoolean('Member_OauthBindEmailEnable', false); goto F9vZL; o1tEp: $XWlC_['retrievePhoneEnable'] = $ts2Yv->getBoolean('retrievePhoneEnable'); goto qQQ_7; qQQ_7: $XWlC_['retrieveEmailEnable'] = $ts2Yv->getBoolean('retrieveEmailEnable'); goto AlTdE; i2BOb: $XWlC_['Member_LoginDefault'] = $ts2Yv->get('Member_LoginDefault'); goto kmCLJ; YECUM: $XWlC_['Member_MoneyEnable'] = ModuleManager::getModuleConfig('Member', 'moneyEnable', false); goto e1PXE; Hk497: $XWlC_['Member_LoginPhoneEnable'] = $ts2Yv->getBoolean('Member_LoginPhoneEnable', false); goto i2BOb; SSiRY: $XWlC_['registerPhoneEnable'] = $ts2Yv->getBoolean('registerPhoneEnable'); goto LP3UL; Cd4mp: $XWlC_['Member_AgreementEnable'] = $ts2Yv->getBoolean('Member_AgreementEnable', false); goto X9D1w; EHfXP: $XWlC_['Member_RegisterCaptchaProvider'] = $ts2Yv->get('Member_RegisterCaptchaProvider'); goto WIHGY; oboqK: $XWlC_['Member_CreditEnable'] = ModuleManager::getModuleConfig('Member', 'creditEnable', false); goto Cd4mp; SYJPb: $XWlC_['Member_RegisterPhonePasswordEnable'] = $ts2Yv->getBoolean('Member_RegisterPhonePasswordEnable', false); goto lv3eY; xMBL9: $XWlC_['Member_PrivacyTitle'] = $ts2Yv->get('Member_PrivacyTitle'); goto lGw2H; E84V8: $XWlC_['registerEmailEnable'] = $ts2Yv->getBoolean('registerEmailEnable'); goto SSiRY; kmCLJ: $XWlC_['registerDisable'] = $ts2Yv->getBoolean('registerDisable'); goto E84V8; LP3UL: $XWlC_['Member_RegisterDefault'] = $ts2Yv->get('Member_RegisterDefault'); goto EHfXP; lv3eY: $XWlC_['registerOauthEnable'] = $ts2Yv->getBoolean('registerOauthEnable', false); goto NLg2x; iapRL: $ts2Yv = modstart_config(); goto S7tRQ; uVZJJ: } }