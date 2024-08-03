<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Web\Controller; use Illuminate\Support\Facades\Input; use Illuminate\Support\Facades\Session; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Request; use ModStart\Core\Input\Response; use ModStart\Core\Util\AgentUtil; use ModStart\Core\Util\SerializeUtil; use ModStart\Module\ModuleBaseController; use Module\Member\Auth\MemberUser; use Module\Member\Provider\Auth\MemberAuthProvider; use Module\Member\Type\MemberOauthCallbackMode; use Module\Member\Util\MemberUtil; use Module\MemberOauth\Core\MemberOauthConstant; use Module\MemberOauth\Oauth\WechatMiniProgramOauth; use Module\MemberOauth\Oauth\WechatMobileOauth; use Module\MemberOauth\Oauth\WechatOauth; class AuthController extends ModuleBaseController { private $api; public function __construct() { $this->api = app(\Module\Member\Api\Controller\AuthController::class); } private function getRedirectData(InputPackage $ErQts) { goto HQQES; HQQES: $m2Av0 = $ErQts->getInteger('dialog'); goto RasbL; H64HQ: $RDHI7 = array('redirect' => $mDpIY); goto Nm8dn; Nm8dn: if ($m2Av0) { $RDHI7['dialog'] = $m2Av0; } goto lXtPb; lXtPb: return $RDHI7; goto FgfMO; RasbL: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('member')); goto H64HQ; FgfMO: } public function login() { goto TSFaf; vE1os: $uuJjm = $ErQts->getBoolean('force', false); goto klLCT; EQovK: $Gn9gl = modstart_config('Member_LoginDefault', 'default'); goto vE1os; iyOvk: if (!empty($RDHI7['dialog'])) { $tURZC = 'loginDialog'; } goto KJtTj; j0eWV: $tURZC = 'login'; goto iyOvk; klLCT: $jZJ6j = array('sso' => modstart_web_url('login/sso', $RDHI7), 'phone' => modstart_web_url('login/phone', $RDHI7), 'wechat' => modstart_web_url('login/wechat', $RDHI7), 'other' => modstart_web_url('login/other', $RDHI7)); goto aeOxI; aeOxI: if (!$uuJjm && !empty($jZJ6j[$Gn9gl])) { return Response::redirect($jZJ6j[$Gn9gl]); } goto j0eWV; SP7EM: if (Request::isPost()) { goto CspcK; CspcK: $FZUh3 = $this->api->login(); goto iNhzb; jODW7: return Response::send(0, '', '', $RDHI7['redirect']); goto zHhFL; iNhzb: if (Response::isError($FZUh3)) { return Response::sendFromGenerate($FZUh3); } goto jdjbe; jdjbe: if (!empty($RDHI7['dialog'])) { return Response::send(0, '', '', '[js]parent.location.href=' . SerializeUtil::jsonEncode($RDHI7['redirect']) . ';'); } goto jODW7; zHhFL: } goto EQovK; Nbfuz: if (null !== $FEjaa) { return $FEjaa; } goto SP7EM; L627P: $RDHI7 = $this->getRedirectData($ErQts); goto wa1ga; TSFaf: $ErQts = InputPackage::buildFromInput(); goto L627P; wa1ga: $this->api->checkRedirectSafety($RDHI7['redirect']); goto kedeZ; kedeZ: $FEjaa = MemberAuthProvider::call('onWebLogin', $RDHI7); goto Nbfuz; KJtTj: return $this->view($tURZC, $RDHI7); goto ZMD1U; ZMD1U: } public function loginSso() { goto GOR8y; Y9kcT: if (!empty($RDHI7['dialog'])) { return Response::send(0, '', '', '[js]parent.location.href=' . SerializeUtil::jsonEncode($FZUh3['data']['redirect']) . ';'); } goto a3KKD; GOR8y: if (!modstart_config('ssoClientEnable', false)) { return Response::generateError('SSO登录未开启'); } goto nbw3d; nbw3d: $ErQts = InputPackage::buildFromInput(); goto sR_CL; sR_CL: $RDHI7 = $this->getRedirectData($ErQts); goto Hlrfw; ydleA: $FZUh3 = $this->api->ssoClientPrepare(); goto BOWfz; uoc4s: Input::merge(array('client' => Request::domainUrl() . '/sso/client')); goto ydleA; a3KKD: return Response::send(0, null, null, $FZUh3['data']['redirect']); goto hyKkp; l1Xnb: Session::put('ssoClientRedirect', $RDHI7['redirect']); goto Y9kcT; BOWfz: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto l1Xnb; Hlrfw: $this->api->checkRedirectSafety($RDHI7['redirect']); goto uoc4s; hyKkp: } public function loginWechat() { goto dJooQ; dJooQ: $ErQts = InputPackage::buildFromInput(); goto JZ1M2; P4Ddj: if (AgentUtil::isMobile()) { $rDRQ3 = 'wechatmobile'; } goto T4yBZ; JZ1M2: $RDHI7 = $this->getRedirectData($ErQts); goto sHdSg; Bf4RV: $rDRQ3 = 'wechat'; goto P4Ddj; T4yBZ: return Response::redirect(modstart_web_url('oauth_login_' . $rDRQ3, $RDHI7)); goto SqQLq; sHdSg: $this->api->checkRedirectSafety($RDHI7['redirect']); goto Bf4RV; SqQLq: } public function loginOther() { goto hM8E6; Dgxfq: $RDHI7 = $this->getRedirectData($ErQts); goto vU0MA; vU0MA: $this->api->checkRedirectSafety($RDHI7['redirect']); goto Gp8iU; hM8E6: $ErQts = InputPackage::buildFromInput(); goto Dgxfq; BxVgB: if (!empty($RDHI7['dialog'])) { $tURZC = 'loginOtherDialog'; } goto ITb59; Gp8iU: $tURZC = 'loginOther'; goto BxVgB; ITb59: return $this->view($tURZC, $RDHI7); goto DSJB3; DSJB3: } public function loginCaptcha() { return $this->api->loginCaptchaRaw(); } public function loginPhone() { goto yajfC; OTQa2: return $this->view($tURZC, $RDHI7); goto rk8wX; uXOAb: $ErQts = InputPackage::buildFromInput(); goto yD0Gc; yD0Gc: $RDHI7 = $this->getRedirectData($ErQts); goto kyinr; SVyDx: $tURZC = 'loginPhone'; goto BuZpg; kyinr: $this->api->checkRedirectSafety($RDHI7['redirect']); goto s9i84; BuZpg: if (!empty($RDHI7['dialog'])) { $tURZC = 'loginPhoneDialog'; } goto OTQa2; s9i84: if (Request::isPost()) { goto ACmQ8; d8xLM: return Response::send(0, null, null, $RDHI7['redirect']); goto UG_hp; Dof2c: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto Lq574; Lq574: if (!empty($RDHI7['dialog'])) { return Response::send(0, '', '', '[js]parent.location.href=' . SerializeUtil::jsonEncode($RDHI7['redirect']) . ';'); } goto d8xLM; ACmQ8: $FZUh3 = $this->api->loginPhone(); goto Dof2c; UG_hp: } goto SVyDx; yajfC: BizException::throwsIf('短信验证登录未开启', !modstart_config('Member_LoginPhoneEnable', false)); goto uXOAb; rk8wX: } public function loginPhoneCaptcha() { return $this->api->loginPhoneCaptchaRaw(); } public function loginPhoneVerify() { return Response::sendFromGenerate($this->api->loginPhoneVerify()); } public function logout() { goto SMKxa; G5_IH: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('')); goto E4yC9; K3LDd: Session::forget('memberUserId'); goto G5_IH; FJrMg: $FEjaa = MemberAuthProvider::call('onWebLogout', $RDHI7); goto aC7U_; E4yC9: return Response::redirect($mDpIY); goto mQmxv; WxlTr: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto pDv82; EfZka: $this->api->checkRedirectSafety($RDHI7['redirect']); goto FJrMg; SMKxa: $ErQts = InputPackage::buildFromInput(); goto ACGL2; pDv82: $ErQts = InputPackage::buildFromInput(); goto K3LDd; C5TT3: $FZUh3 = $this->api->logout(); goto WxlTr; axjo1: if (modstart_config('ssoClientEnable', false) && modstart_config('ssoClientLogoutSyncEnable', false)) { goto vHy1x; QcnN5: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto nGmnH; vHy1x: Input::merge(array('domainUrl' => Request::domainUrl())); goto CoMMr; nGmnH: Session::put('ssoLogoutRedirect', $RDHI7['redirect']); goto aTgPM; CoMMr: $FZUh3 = $this->api->ssoClientLogoutPrepare(); goto QcnN5; aTgPM: return Response::send(0, null, null, $FZUh3['data']['redirect']); goto KtIN1; KtIN1: } goto C5TT3; aC7U_: if (null !== $FEjaa) { return $FEjaa; } goto axjo1; ACGL2: $RDHI7 = $this->getRedirectData($ErQts); goto EfZka; mQmxv: } public function register() { goto srrfz; fjvx5: $RDHI7 = $this->getRedirectData($ErQts); goto sFzIV; sFzIV: if (Request::isPost()) { goto d2hF3; g9M1t: $VwfRl = modstart_web_url('login', $RDHI7); goto VcP0n; d2hF3: $FZUh3 = $this->api->register(); goto rqcUV; rqcUV: if ($FZUh3['code']) { if ($ErQts->getTrimString('captcha')) { return Response::send(-1, $FZUh3['msg'], null, '[js]$("[data-captcha]").click()'); } return Response::send(-1, $FZUh3['msg']); } goto g9M1t; VcP0n: return Response::send(0, '', '', $VwfRl); goto PmMtx; PmMtx: } goto pwtbH; pwtbH: if (modstart_config('Member_RegisterPhoneEnable', false)) { $NHR5H = modstart_config('Member_RegisterDefault', 'default'); if ('phone' == $NHR5H) { $uuJjm = $ErQts->getBoolean('force', false); if (!$uuJjm) { return Response::redirect(modstart_web_url('register/phone', $RDHI7)); } } } goto FctHu; BUWY9: return $this->view($tURZC, $RDHI7); goto W2O_x; FctHu: $tURZC = 'register'; goto kufh4; kufh4: if (!empty($RDHI7['dialog'])) { $tURZC = 'registerDialog'; } goto BUWY9; lILyQ: $ErQts = InputPackage::buildFromInput(); goto fjvx5; srrfz: BizException::throwsIf('禁止注册', modstart_config('registerDisable', false)); goto lILyQ; W2O_x: } public function registerPhone() { goto Lmil6; sWeKL: if (Request::isPost()) { goto Fy_Ez; hSRdq: return Response::send(0, null, null, $RDHI7['redirect']); goto JwfJA; cNRQ6: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto hSRdq; Fy_Ez: $FZUh3 = $this->api->registerPhone(); goto cNRQ6; JwfJA: } goto WSTjS; D98r3: return $this->view($tURZC, $RDHI7); goto yA2Ve; c261v: BizException::throwsIf('短信验证注册未开启', !modstart_config('Member_RegisterPhoneEnable', false)); goto gj4lI; WSTjS: $tURZC = 'registerPhone'; goto w_0iv; sBKE0: $this->api->checkRedirectSafety($RDHI7['redirect']); goto sWeKL; gj4lI: $ErQts = InputPackage::buildFromInput(); goto CGxNz; CGxNz: $RDHI7 = $this->getRedirectData($ErQts); goto sBKE0; Lmil6: BizException::throwsIf('禁止注册', modstart_config('registerDisable', false)); goto c261v; w_0iv: if (!empty($RDHI7['dialog'])) { $tURZC = 'registerPhoneDialog'; } goto D98r3; yA2Ve: } public function registerEmailVerify() { return Response::sendFromGenerate($this->api->registerEmailVerify()); } public function registerPhoneVerify() { return Response::sendFromGenerate($this->api->registerPhoneVerify()); } public function registerCaptcha() { return $this->api->registerCaptchaRaw(); } public function registerCaptchaVerify() { goto vyl0q; GHhRt: return Response::send(0, $FZUh3['msg']); goto mxwhY; YRqOs: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg'], null, '[js]$("[data-captcha]").click()'); } goto GHhRt; vyl0q: $FZUh3 = $this->api->registerCaptchaVerify(); goto YRqOs; mxwhY: } public function retrieve() { goto RvBpI; RvBpI: $ErQts = InputPackage::buildFromInput(); goto fQL5x; FY0i1: return $this->view('retrieve', array('redirect' => $mDpIY)); goto BdYCH; fQL5x: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('member')); goto FY0i1; BdYCH: } public function retrievePhone() { goto whF6k; VUlTG: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('member')); goto OsQAd; BrOxA: return $this->view('retrievePhone', array('redirect' => $mDpIY)); goto fBK9P; whF6k: $ErQts = InputPackage::buildFromInput(); goto VUlTG; OsQAd: if (Request::isPost()) { goto cLH7r; cLH7r: $FZUh3 = $this->api->retrievePhone(); goto MJ8nU; JVBD3: return Response::send(0, $FZUh3['msg'], null, modstart_web_url('retrieve') . '/reset?redirect=' . urlencode($mDpIY)); goto tcYfT; MJ8nU: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto JVBD3; tcYfT: } goto BrOxA; fBK9P: } public function retrievePhoneVerify() { return Response::sendFromGenerate($this->api->retrievePhoneVerify()); } public function retrieveEmail() { goto AZ_K3; AZ_K3: $ErQts = InputPackage::buildFromInput(); goto TGsy9; TGsy9: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('member')); goto bk7Zx; VFywc: return $this->view('retrieveEmail', array('redirect' => $mDpIY)); goto pXc0W; bk7Zx: if (Request::isPost()) { goto zN8IJ; zN8IJ: $FZUh3 = $this->api->retrieveEmail(); goto w8aX7; H8zYI: return Response::send(0, $FZUh3['msg'], null, modstart_web_url('retrieve') . '/reset?redirect=' . urlencode($mDpIY)); goto s1JfM; w8aX7: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto H8zYI; s1JfM: } goto VFywc; pXc0W: } public function retrieveEmailVerify() { return Response::sendFromGenerate($this->api->retrieveEmailVerify()); } public function retrieveCaptcha() { return $this->api->retrieveCaptchaRaw(); } public function retrieveReset() { goto zKnIs; zKnIs: $ErQts = InputPackage::buildFromInput(); goto vYzzu; DFllQ: $FZUh3 = $this->api->retrieveResetInfo(); goto UhNbP; y9aBp: if (Request::isPost()) { goto u3q1t; Tw3el: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto LGbgX; LGbgX: return Response::send(0, $FZUh3['msg'], null, $mDpIY); goto MVISn; u3q1t: $FZUh3 = $this->api->retrieveReset(); goto Tw3el; MVISn: } goto DFllQ; Mt1wt: return $this->view('retrieveReset', array('redirect' => $mDpIY, 'memberUser' => $FZUh3['data']['memberUser'])); goto X9qkf; UhNbP: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto Mt1wt; vYzzu: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('member')); goto y9aBp; X9qkf: } public function oauthLogin($rDRQ3 = null) { goto ndSmH; qbgm3: Session::put('oauthRedirect', $mDpIY); goto nEoXv; nEoXv: return Response::redirect($FZUh3['data']['redirect']); goto JJFZK; t1Y41: $FZUh3 = $this->api->oauthLogin($rDRQ3, $oZLCv); goto Rsosf; TK0Sp: $this->api->checkRedirectSafety($mDpIY); goto hDWFa; ndSmH: $ErQts = InputPackage::buildFromInput(); goto XS5Q5; ZHl5W: if ($zMdND) { Session::put('oauthCallbackMode', $zMdND); } goto gvCFn; XS5Q5: $tURZC = $ErQts->getBoolean('view', false); goto qhzV8; qhzV8: if ($tURZC) { Session::put('oauthLoginView', true); } goto l1Ago; gvCFn: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('member')); goto TK0Sp; Rsosf: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto qbgm3; l1Ago: $zMdND = $ErQts->getType('callbackMode', MemberOauthCallbackMode::class); goto ZHl5W; hDWFa: $oZLCv = Request::domainUrl() . '/oauth_callback_' . $rDRQ3; goto t1Y41; JJFZK: } public function oauthCallback($rDRQ3 = null) { goto f9uJ2; Y2jlr: $zMdND = Session::pull('oauthCallbackMode', null); goto TaZqs; wKi4N: $FZUh3 = $this->api->oauthCallback($rDRQ3, $oZLCv); goto VY13c; NVNVe: $mDpIY = Session::get('oauthRedirect', modstart_web_url('member')); goto e5RE2; e5RE2: $sxGVm = Session::get('oauthUserInfo'); goto QIT6I; QIT6I: $tURZC = Session::pull('oauthLoginView', false); goto UY18l; TaZqs: if ($zMdND) { switch ($zMdND) { case MemberOauthCallbackMode::View: goto Bsc16; srwwx: return Response::redirect($mDpIY); goto BlwN9; EpxE1: Session::forget('oauthUserInfo'); goto qLHRN; qLHRN: Session::forget('oauthRedirect'); goto srwwx; Bsc16: Session::put('oauthViewOpenId_' . $rDRQ3, $sxGVm['openid']); goto EpxE1; BlwN9: case MemberOauthCallbackMode::AutoBind: goto nBQh0; nBQh0: BizException::throwsIf('未登录', MemberUser::isNotLogin()); goto wYVtr; PTXln: Session::forget('oauthUserInfo'); goto XzGaP; wYVtr: MemberUtil::putOauth(MemberUser::id(), $rDRQ3, $sxGVm['openid']); goto PTXln; KGZN2: return Response::redirect($mDpIY); goto jYWxK; ynP8r: switch ($rDRQ3) { case WechatMobileOauth::NAME: case WechatMiniProgramOauth::NAME: case WechatOauth::NAME: if (!empty($cPWai['unionid'])) { MemberUtil::putOauth(MemberUser::id(), MemberOauthConstant::WECHAT_UNION, $cPWai['unionid']); } break; } goto KGZN2; XzGaP: Session::forget('oauthRedirect'); goto ynP8r; jYWxK: } } goto VBU3r; UY18l: if ($tURZC) { goto IAsDC; IAsDC: Session::put('oauthViewOpenId_' . $rDRQ3, $sxGVm['openid']); goto nu7xU; f5ij_: Session::forget('oauthRedirect'); goto NFdoZ; NFdoZ: return Response::redirect($mDpIY); goto AqGMo; nu7xU: Session::forget('oauthUserInfo'); goto f5ij_; AqGMo: } goto Y2jlr; f9uJ2: $oZLCv = Request::domainUrl() . '/oauth_callback_' . $rDRQ3; goto wKi4N; VY13c: if ($FZUh3['code']) { return Response::sendFromGenerate($FZUh3); } goto NVNVe; VBU3r: return Response::redirect(Request::domainUrl() . '/oauth_bind_' . $rDRQ3); goto paRQx; paRQx: } public function oauthBackAndClose() { return $this->view('oauthBackAndClose'); } public function oauthBind($rDRQ3 = null) { goto D7MZn; pyZDg: $this->api->checkRedirectSafety($mDpIY); goto L7PSy; ipymo: $mDpIY = Session::get('oauthRedirect'); goto OiL4K; TpHDp: $sxGVm = Session::get('oauthUserInfo', array()); goto JkM01; D7MZn: $ErQts = InputPackage::buildFromInput(); goto ipymo; dvzav: return $this->view('oauthBind', array('oauthUserInfo' => $sxGVm, 'redirect' => $mDpIY)); goto fRHqp; OiL4K: if (empty($mDpIY)) { $mDpIY = $ErQts->getTrimString('redirect'); } goto B4Usf; tuAgl: if ($FZUh3['data']['memberUserId'] > 0) { Session::forget('oauthRedirect'); return Response::redirect($mDpIY); } goto aIK_B; aIK_B: if (MemberUser::isLogin()) { goto toC6u; e3s3Y: return Response::send(0, '绑定成功', null, $mDpIY); goto UyXWy; lmw10: Session::forget('oauthRedirect'); goto e3s3Y; sNr3t: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto lmw10; toC6u: $FZUh3 = $this->api->oauthBind($rDRQ3); goto sNr3t; UyXWy: } goto dvzav; JkM01: $FZUh3 = $this->api->oauthTryLogin($rDRQ3); goto HuK20; HuK20: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto tuAgl; L7PSy: if (Request::isPost()) { goto dnkt8; Ezpks: return Response::send(0, $FZUh3['msg'], null, $mDpIY); goto PJoOW; s7Wt3: Session::forget('oauthRedirect'); goto Ezpks; QWts5: if ($FZUh3['code']) { if ($ErQts->getTrimString('captcha')) { return Response::send(-1, $FZUh3['msg'], null, '[js]$("[data-captcha]").click()'); } return Response::send(-1, $FZUh3['msg']); } goto s7Wt3; dnkt8: $FZUh3 = $this->api->oauthBind($rDRQ3); goto QWts5; PJoOW: } goto TpHDp; B4Usf: if (empty($mDpIY)) { $mDpIY = modstart_web_url('member'); } goto pyZDg; fRHqp: } public function oauthBindCaptcha() { return $this->api->oauthBindCaptchaRaw(); } public function oauthBindCaptchaVerify() { goto lpYSv; lpYSv: $FZUh3 = $this->api->oauthBindCaptchaVerify(); goto y6ngw; axudj: return Response::send(0, $FZUh3['msg']); goto Ndq_B; y6ngw: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg'], null, '[js]$("[data-captcha]").click()'); } goto axudj; Ndq_B: } public function oauthBindEmailVerify() { return Response::sendFromGenerate($this->api->oauthBindEmailVerify()); } public function oauthBindPhoneVerify() { return Response::sendFromGenerate($this->api->oauthBindPhoneVerify()); } public function oauthProxy() { return $this->view('oauthProxy'); } public function ssoClient() { goto hR88l; LG8cK: return Response::send(0, null, null, $mDpIY); goto z45EG; ncX9I: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto oVz2U; hR88l: $FZUh3 = $this->api->ssoClient(); goto ncX9I; oVz2U: $mDpIY = Session::get('ssoClientRedirect', modstart_web_url('member')); goto LG8cK; z45EG: } public function ssoServer() { goto mi3Xt; rX66b: if ($FZUh3['data']['isLogin']) { return Response::send(0, null, null, $o_peC); } goto VVUMa; VVUMa: return Response::send(0, null, null, modstart_web_url('login') . '?' . http_build_query(array('redirect' => $o_peC))); goto FwIAb; iN6cm: $o_peC = '/sso/server_success?' . http_build_query(array('client' => $ErQts->getTrimString('client'), 'domainUrl' => Request::domainUrl())); goto rX66b; byT37: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto iN6cm; lFda6: $FZUh3 = $this->api->ssoServer(); goto byT37; mi3Xt: $ErQts = InputPackage::buildFromInput(); goto lFda6; FwIAb: } public function ssoServerSuccess() { goto ZHibI; l38pW: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto V6oz3; ZHibI: $FZUh3 = $this->api->ssoServerSuccess(); goto l38pW; V6oz3: return Response::send(0, null, null, $FZUh3['data']['redirect']); goto l8DTp; l8DTp: } public function ssoServerLogout() { goto R2bAm; qzz2N: return Response::send(0, null, null, $mDpIY); goto GmbFq; eI0cb: $FZUh3 = $this->api->ssoServerLogout(); goto swGQJ; swGQJ: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto lRUJT; R2bAm: $ErQts = InputPackage::buildFromInput(); goto eI0cb; lRUJT: $mDpIY = $ErQts->getTrimString('redirect', modstart_web_url('')); goto qzz2N; GmbFq: } public function ssoClientLogout() { goto y34AT; xXZEU: return Response::send(0, null, null, $mDpIY); goto dLnVH; csbur: if ($FZUh3['code']) { return Response::send(-1, $FZUh3['msg']); } goto DERou; DERou: $mDpIY = Session::get('ssoLogoutRedirect', modstart_web_url('')); goto xXZEU; y34AT: $FZUh3 = $this->api->ssoClientLogout(); goto csbur; dLnVH: } }