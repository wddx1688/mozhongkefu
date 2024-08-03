<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Util; use Carbon\Carbon; use Illuminate\Support\Str; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Input\Response; use ModStart\Core\Util\ArrayUtil; use ModStart\Core\Util\EncodeUtil; use Module\LiveChat\Type\AccountChatStatus; use Module\LiveChat\Type\AccountStatus; class AccountUtil { public static function all() { return ModelUtil::all('live_chat_account'); } public static function update($vWdBd, $XWlC_) { ModelUtil::update('live_chat_account', $vWdBd, $XWlC_); } public static function getOnlineCount() { return ModelUtil::model('live_chat_account')->where(array('chatStatus' => AccountChatStatus::ONLINE, 'chatIsLogin' => true))->where('chatStatusUpdate', '>', date('Y-m-d H:i:s', time() - 120))->count(); } public static function listOnlineIds() { $EnI2D = ModelUtil::model('live_chat_account')->where(array('chatStatus' => AccountChatStatus::ONLINE, 'chatIsLogin' => true))->where('chatStatusUpdate', '>', date('Y-m-d H:i:s', time() - 120))->get(array('id'))->toArray(); return ArrayUtil::flatItemsByKey($EnI2D, 'id'); } public static function updateChatStatus($vWdBd, $PY7Nh, $r6Td1 = true) { ModelUtil::update('live_chat_account', $vWdBd, array('chatStatus' => $PY7Nh, 'chatIsLogin' => $r6Td1, 'chatStatusUpdate' => Carbon::now())); } public static function get($vWdBd) { return ModelUtil::get('live_chat_account', array('id' => $vWdBd)); } public static function processDefault(&$B5WTe) { goto MvyeG; BwIcz: if (empty($B5WTe['nickname'])) { $B5WTe['nickname'] = $B5WTe['username']; } goto fFZG1; fFZG1: if (empty($B5WTe['avatar'])) { $B5WTe['avatar'] = AssetsUtil::fixFull('asset/image/avatar.svg', false); } goto yfaVC; MvyeG: if (empty($B5WTe)) { return; } goto BwIcz; yfaVC: } public static function login($c_Qdc = '', $ESrAL = '') { goto rYFoP; afp3r: if (!$c_Qdc) { return Response::generate(-1, '用户名为空'); } goto L08cJ; hwYJR: switch ($B5WTe['status']) { case AccountStatus::FORBIDDEN: return Response::generateError(-8, '登录失败:当前用户已被禁用'); } goto fu07k; rYFoP: $c_Qdc = trim($c_Qdc); goto afp3r; L08cJ: if (!$ESrAL) { return Response::generate(-2, '密码为空'); } goto yooCb; jYCqH: $B5WTe = ModelUtil::get('live_chat_account', $VSP7l); goto zcgI_; yooCb: if (strpos($c_Qdc, '@') !== false) { return Response::generate(-5, '用户名格式不正确'); } goto DGLd1; DGLd1: $VSP7l = array('username' => $c_Qdc); goto jYCqH; qkRrC: if ($B5WTe['password'] != EncodeUtil::md5WithSalt($ESrAL, $B5WTe['passwordSalt'])) { return Response::generate(-7, '登录失败:用户名或密码错误'); } goto hwYJR; fu07k: return Response::generateSuccessData($B5WTe); goto kMmeu; zcgI_: if (empty($B5WTe)) { return Response::generate(-6, '登录失败:用户名或密码错误'); } goto qkRrC; kMmeu: } public static function changePassword($iwLDV, $vskPg, $EMVCH = null, $pOKiI = false) { goto cQ5Bl; Q81BJ: ModelUtil::update('live_chat_account', array('id' => $B5WTe['id']), array('passwordSalt' => $Hp0Da, 'password' => EncodeUtil::md5WithSalt($vskPg, $Hp0Da))); goto g7_13; iJi_o: $B5WTe = ModelUtil::get('live_chat_account', array('id' => $iwLDV)); goto z18mR; cQ5Bl: if (!$pOKiI && empty($EMVCH)) { return Response::generate(-1, '旧密码不能为空'); } goto iJi_o; N3SC7: if (!$pOKiI && EncodeUtil::md5WithSalt($EMVCH, $B5WTe['passwordSalt']) != $B5WTe['password']) { return Response::generate(-1, '旧密码不正确'); } goto ZVSio; ZVSio: $Hp0Da = Str::random(16); goto Q81BJ; efAQQ: if (empty($vskPg)) { return Response::generate(-1, '新密码为空'); } goto N3SC7; z18mR: if (empty($B5WTe)) { return Response::generate(-1, '用户不存在'); } goto efAQQ; g7_13: return Response::generate(0, 'ok'); goto mSsuO; mSsuO: } }