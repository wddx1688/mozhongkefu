<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use Carbon\Carbon; use Module\ImServer\Core\Model\ServiceModel; use Module\ImServer\Type\ImChatType; class TalkRepository { public static function updateLastTalk($wtt04, $qzstR, $GwH5l, $f8YsO) { switch ($wtt04) { case ImChatType::SINGLE: break; case ImChatType::GROUP: break; case ImChatType::SERVICE: goto tzrn8; tzrn8: $Bj5vh = array('lastTalkText' => $f8YsO, 'updateTime' => Carbon::now()); goto PuujI; fgjeb: break; goto nCoTV; PuujI: ServiceModel::update($GwH5l, $Bj5vh); goto fgjeb; nCoTV: } } }