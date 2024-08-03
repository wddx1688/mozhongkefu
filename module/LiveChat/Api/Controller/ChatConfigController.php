<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use ModStart\Core\Input\Response; class ChatConfigController extends AbstractChatController { public function index() { goto PPOWw; QNuKx: return Response::generateSuccessData(array('user' => $t9mtn, 'config' => $ts2Yv)); goto h4sta; PPOWw: $t9mtn = array('id' => $this->userId(), 'nickname' => $this->user('nickname'), 'avatar' => $this->user('avatar')); goto XFLFW; XFLFW: $ts2Yv = array(); goto QNuKx; h4sta: } }