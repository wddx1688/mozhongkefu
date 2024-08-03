<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use ModStart\Core\Input\Response; use Module\LiveChat\Type\AccountChatStatus; class StaffConfigController extends AbstractStaffController { public function index() { goto Jf9hr; uMlRx: $ts2Yv = array(); goto ognhg; ognhg: return Response::generateSuccessData(array('user' => $t9mtn, 'config' => $ts2Yv)); goto JWcdh; Jf9hr: $t9mtn = array('id' => $this->accountId(), 'username' => $this->account('username'), 'nickname' => $this->account('nickname'), 'avatar' => $this->account('avatar'), 'chatStatus' => $this->account('chatStatus', AccountChatStatus::ONLINE)); goto uMlRx; JWcdh: } }