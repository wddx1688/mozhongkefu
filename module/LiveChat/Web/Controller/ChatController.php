<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Web\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Module\ModuleBaseController; class ChatController extends ModuleBaseController { public function index($ybVCD = null) { goto i4Yt8; YEsPA: if (empty($ybVCD)) { $ybVCD = $ErQts->getTrimString('channel'); } goto WpOC_; i4Yt8: $ErQts = InputPackage::buildFromInput(); goto YEsPA; WpOC_: return $this->view('liveChat.chat.index', array('channel' => $ybVCD, 'param' => $ErQts->getTrimString('param'))); goto eqNF0; eqNF0: } public function preview() { return $this->view('liveChat.chat.preview'); } }