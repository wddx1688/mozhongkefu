<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use Illuminate\Support\Facades\Session; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use Module\LiveChat\Util\AccountUtil; class StaffLoginController extends AbstractStaffController { public function index() { goto E8gTh; qb3jL: return Response::generateSuccess(); goto hS7T1; VixeE: $ESrAL = $ErQts->getTrimString('password'); goto Jo3E0; bHxJa: if (Response::isError($FZUh3)) { return $FZUh3; } goto JF6MW; Jo3E0: $FZUh3 = AccountUtil::login($c_Qdc, $ESrAL); goto bHxJa; F3_sq: $c_Qdc = $ErQts->getTrimString('username'); goto VixeE; JF6MW: Session::put('liveChatAccountId', $FZUh3['data']['id']); goto qb3jL; E8gTh: $ErQts = InputPackage::buildFromInput(); goto F3_sq; hS7T1: } public function logout() { Session::forget('liveChatAccountId'); return Response::generateSuccess(); } }