<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Consumer; use Module\ImServer\Core\GatewayUtil; use Module\ImServer\Core\Message\ChatMsg; use Module\ImServer\Core\Model\ChatRecordModel; use Module\ImServer\Core\Model\ServiceModel; use Module\ImServer\Core\Model\UserFriendModel; use Module\ImServer\Core\Repository\GroupRepository; use Module\ImServer\Core\Repository\LogRepository; use Module\ImServer\Core\Repository\ServiceRepository; use Module\ImServer\Core\Repository\UnreadMsgRepository; use Module\ImServer\Core\Repository\UserBinderRepository; use Module\ImServer\Type\ImChatType; use Module\ImServer\Type\ImPushType; class ChatMsgConsumer { private static function notifyUserFriend($qzstR, ChatMsg $miOiF) { goto R_Dnp; R_Dnp: $ay3w5 = UserFriendModel::listFriendUserIds($qzstR); goto n__q5; D9c31: foreach ($ay3w5 as $CtSrv) { $COuxF = array_merge($COuxF, UserBinderRepository::listUserClients($CtSrv)); } goto jd4sI; n__q5: $COuxF = array(); goto D9c31; jd4sI: GatewayUtil::sendToAll($COuxF, $miOiF); goto OTrZH; OTrZH: } public static function onInput(ChatMsg $miOiF) { goto QCJxz; ImtQ1: LogRepository::log("ChatMsgConsumer.onInput - clients - {$GwH5l}", $COuxF); goto lbm_U; lbm_U: GatewayUtil::sendToAll($COuxF, $miOiF); goto rEBFr; qpoK0: $COuxF = UserBinderRepository::listUserClients($GwH5l); goto ImtQ1; QCJxz: $GwH5l = $miOiF->getDataInteger('toId'); goto qpoK0; rEBFr: } public static function onUserOnline(ChatMsg $miOiF) { $qzstR = $miOiF->getDataInteger('userId'); self::notifyUserFriend($qzstR, $miOiF); } public static function onUserOffline(ChatMsg $miOiF) { $qzstR = $miOiF->getDataInteger('userId'); self::notifyUserFriend($qzstR, $miOiF); } public static function onTalk(ChatMsg $miOiF) { goto izSAQ; xWC0Q: $t9mtn = $miOiF->getDataValue('user'); goto Nwffi; Nwffi: $GwH5l = $miOiF->getDataInteger('toId'); goto qHeHs; X0_D8: $miOiF->data(array('msgId' => $oNagc['id'], 'chatType' => $wtt04, 'userId' => $qzstR, 'toId' => $GwH5l, 'user' => $t9mtn, 'talkType' => $oNagc['talkType'], 'content' => $oNagc['content'], 'time' => $oNagc['created_at'])); goto LymN0; yGGXJ: $okmYO = array_build($COuxF, function ($U8G_W, $gghxW) { return array($gghxW, UserBinderRepository::getClientUserId($gghxW)); }); goto b9ZHx; izSAQ: $wtt04 = $miOiF->getDataType(ImChatType::class, 'chatType'); goto NTFkA; LymN0: GatewayUtil::sendToAll($COuxF, $miOiF); goto yGGXJ; qHeHs: $lhv9c = $miOiF->getDataInteger('chatRecordId'); goto dQuJE; b9ZHx: foreach ($okmYO as $StcZM => $qzstR) { GatewayUtil::send($StcZM, ChatMsg::makePush(ImPushType::UnreadUpdate, array('chatType' => $wtt04, 'toId' => $GwH5l, 'count' => UnreadMsgRepository::get($wtt04, $GwH5l, $qzstR)))); } goto dwAC6; NTFkA: $qzstR = $miOiF->getDataInteger('userId'); goto xWC0Q; dwAC6: switch ($wtt04) { case ImChatType::SERVICE: goto FHBOo; RoTaS: break; goto BvPI3; W4AFW: foreach ($okmYO as $StcZM => $qzstR) { GatewayUtil::send($StcZM, ChatMsg::makePush(ImPushType::ServiceUpdate, $FhRrv)); } goto RoTaS; FHBOo: $FhRrv = ServiceModel::get($GwH5l); goto W4AFW; BvPI3: } goto WNo35; gtpg1: $oNagc = ChatRecordModel::get($lhv9c); goto X0_D8; dOy_Y: switch ($wtt04) { case ImChatType::SINGLE: $COuxF = array_merge($COuxF, UserBinderRepository::listUserClients($GwH5l)); break; case ImChatType::GROUP: goto g6VFQ; yTksF: break; goto tFabG; WHTtI: $COuxF = array_merge($COuxF, UserBinderRepository::listAllUserClients($Xz9FV)); goto yTksF; g6VFQ: $Xz9FV = GroupRepository::listGroupUsers($GwH5l); goto WHTtI; tFabG: case ImChatType::SERVICE: goto bASCH; moVkU: break; goto PPz3S; bASCH: $ATQc3 = ServiceRepository::listServiceUsers($GwH5l); goto YpKp1; YpKp1: $COuxF = array_merge($COuxF, UserBinderRepository::listAllUserClients($ATQc3)); goto moVkU; PPz3S: default: return; } goto gtpg1; dQuJE: $COuxF = UserBinderRepository::listUserClients($qzstR); goto dOy_Y; WNo35: } public static function onRecall(ChatMsg $miOiF) { goto EKto9; EKto9: $qzstR = $miOiF->getDataInteger('userId'); goto djTYn; Auygq: $oNagc = ChatRecordModel::get($lhv9c); goto TBXtV; DjgdI: GatewayUtil::sendToAll($COuxF, $miOiF); goto K1f0v; TBXtV: $COuxF = UserBinderRepository::listUserClients($qzstR); goto fO6M7; Z_Npj: $miOiF->data(array('userId' => $qzstR, 'chatRecordId' => $lhv9c, 'chatType' => $oNagc['chatType'], 'toId' => $oNagc['toId'])); goto DjgdI; djTYn: $lhv9c = $miOiF->getDataInteger('chatRecordId'); goto Auygq; fO6M7: switch ($oNagc['chatType']) { case ImChatType::SINGLE: $COuxF = array_merge($COuxF, UserBinderRepository::listUserClients($oNagc['toId'])); break; case ImChatType::GROUP: goto ZLgUX; ZLgUX: $Xz9FV = GroupRepository::listGroupUsers($oNagc['toId']); goto DoM6k; DoM6k: $COuxF = array_merge($COuxF, UserBinderRepository::listAllUserClients($Xz9FV)); goto bTGO2; bTGO2: break; goto EV_kB; EV_kB: case ImChatType::SERVICE: goto on4ua; on4ua: $ATQc3 = ServiceRepository::listServiceUsers($oNagc['toId']); goto FraxT; FraxT: $COuxF = array_merge($COuxF, UserBinderRepository::listAllUserClients($ATQc3)); goto g_bm9; g_bm9: break; goto EMUSq; EMUSq: default: return; } goto Z_Npj; K1f0v: } public static function onPush(ChatMsg $miOiF) { goto FPw7G; GACOv: GatewayUtil::sendToAll($COuxF, $miOiF); goto uPxBj; FPw7G: $TpKK1 = $miOiF->getAmqpValue('toUserIds'); goto C6n3f; C6n3f: if (empty($TpKK1)) { return; } goto MPmYr; MPmYr: $COuxF = UserBinderRepository::listAllUserClients($TpKK1); goto GACOv; uPxBj: } }