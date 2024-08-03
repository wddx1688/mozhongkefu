<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use Module\Member\Auth\MemberUser; class ChatOfflineMessageController extends AbstractChatController { public function submit() { goto tlxXY; nv2h_: return Response::generateSuccess(); goto DRgvW; i4oRO: $XWlC_ = array(); goto xUeki; agA7D: ModelUtil::insert('live_chat_offline_message', $XWlC_); goto nv2h_; HlPTj: $XWlC_['contact'] = $ErQts->getTrimString('contact'); goto UIvHy; tlxXY: $ErQts = InputPackage::buildFromInput(); goto i4oRO; xUeki: $XWlC_['name'] = $ErQts->getTrimString('name'); goto HlPTj; x6ZeQ: $XWlC_['memberUserId'] = MemberUser::id(); goto agA7D; Sz9RB: BizException::throwsIfEmpty('联系方式为空', $XWlC_['contact']); goto RBJJt; UIvHy: $XWlC_['content'] = $ErQts->getTrimString('content'); goto lrp5V; lrp5V: BizException::throwsIfEmpty('称呼为空', $XWlC_['name']); goto Sz9RB; RBJJt: BizException::throwsIfEmpty('留言内容为空', $XWlC_['content']); goto x6ZeQ; DRgvW: } }