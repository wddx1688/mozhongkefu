<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Listener; use ModStart\Core\Input\InputPackage; use Module\ImServer\Core\Listener\AbstractRequestListener; use Module\ImServer\Core\Message\ChatMsg; use Module\ImServer\Core\Repository\ServiceRepository; use Module\ImServer\Type\ImRequestType; use Module\LiveChat\Constant\LiveChatConstant; use Module\LiveChat\Type\AccountChatStatus; use Module\LiveChat\Util\AccountUtil; class StaffRequestListener extends AbstractRequestListener { public function requests() { return array('AccountChatStatusSet', ImRequestType::ServiceQueueList, ImRequestType::ServiceProcessingList, ImRequestType::ServiceProcessedList, ImRequestType::ServiceProcessingRequest); } public function permit($U1CFU, ChatMsg $miOiF) { return $miOiF->isContextUserBiz(LiveChatConstant::IM_USER_STAFF); } public function onAccountChatStatusSet($U1CFU, ChatMsg $miOiF, InputPackage $dvCKi) { goto xb9VF; i3k73: AccountUtil::updateChatStatus($t9mtn['bizId'], $PY7Nh, true); goto dWnfo; bDeXg: $PY7Nh = $dvCKi->getType('chatStatus', AccountChatStatus::class); goto i3k73; xb9VF: $t9mtn = $miOiF->getContextUser(); goto bDeXg; dWnfo: } public function onServiceQueueList($U1CFU, ChatMsg $miOiF, InputPackage $dvCKi) { ServiceRepository::pushQueueToClient(LiveChatConstant::IM_SERVICE_NAME, $U1CFU, $dvCKi->getPage(), $dvCKi->getPageSize()); } public function onServiceProcessingList($U1CFU, ChatMsg $miOiF, InputPackage $dvCKi) { $t9mtn = $miOiF->getContextUser(); ServiceRepository::pushProcessingToClient(LiveChatConstant::IM_SERVICE_NAME, $t9mtn['id'], $U1CFU, $dvCKi->getPage(), $dvCKi->getPageSize()); } public function onServiceProcessedList($U1CFU, ChatMsg $miOiF, InputPackage $dvCKi) { $t9mtn = $miOiF->getContextUser(); ServiceRepository::pushProcessedToClient(LiveChatConstant::IM_SERVICE_NAME, $t9mtn['id'], $U1CFU, $dvCKi->getPage(), $dvCKi->getPageSize()); } public function onServiceProcessingRequest($U1CFU, ChatMsg $miOiF, InputPackage $dvCKi) { goto BvvQ9; BvvQ9: $FWfay = $dvCKi->getInteger('serviceId'); goto jda69; s5m9s: return $FZUh3; goto ueRPk; KTzav: ServiceRepository::pushQueueToBizUsers(LiveChatConstant::IM_SERVICE_NAME, LiveChatConstant::IM_USER_STAFF, AccountUtil::listOnlineIds()); goto c4nBf; jda69: $t9mtn = $miOiF->getContextUser(); goto A9SD8; A9SD8: $FZUh3 = ServiceRepository::processingRequest($t9mtn['id'], $FWfay); goto KTzav; c4nBf: ServiceRepository::pushProcessingToClient(LiveChatConstant::IM_SERVICE_NAME, $t9mtn['id'], $U1CFU); goto s5m9s; ueRPk: } }