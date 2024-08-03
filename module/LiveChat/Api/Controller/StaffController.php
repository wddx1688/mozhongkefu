<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use ModStart\Core\Input\Response; use Module\ImServer\Core\Repository\UserAuthRepository; class StaffController extends AbstractStaffController { public function init() { goto QYh27; QYh27: $FZUh3 = UserAuthRepository::generateToken('LCStaff', $this->accountId(), $this->account('nickname'), $this->account('avatar')); goto lhUAI; lhUAI: $t9mtn = $FZUh3['data']['user']; goto Ye9NM; Ye9NM: $XWlC_ = array('token' => $FZUh3['data']['token'], 'imUserId' => $t9mtn['id']); goto Cdfoe; Cdfoe: return Response::generateSuccessData($XWlC_); goto jkCxb; jkCxb: } public function serviceInfo() { } }