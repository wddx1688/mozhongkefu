<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Model; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\ArrayUtil; use ModStart\Core\Util\SerializeUtil; class ChatRecordModel { public static function create($XWlC_) { if (isset($XWlC_['content'])) { $XWlC_['content'] = SerializeUtil::jsonEncode($XWlC_['content']); } return ModelUtil::insert('im_chat_record', $XWlC_); } public static function get($vWdBd) { goto cIwHU; HO3H_: return $E1j2M; goto IaAGy; cIwHU: $E1j2M = ModelUtil::get('im_chat_record', $vWdBd); goto xwKvV; xwKvV: ModelUtil::decodeRecordJson($E1j2M, 'content'); goto HO3H_; IaAGy: } public static function history($wtt04, $GwH5l, $LIhQG = 100, $FijOM = -1, $hprYL = -1) { goto Q8UNC; NmNgF: ModelUtil::decodeRecordsJson($EnI2D, array('content')); goto aGwV2; ECRru: foreach ($EnI2D as $U8G_W => $He0J8) { goto b2PK_; SYNcI: $PBpnF[] = $AVLNU; goto Hdyqu; b2PK_: $AVLNU = ArrayUtil::keepKeys($He0J8, array('id', 'talkType', 'userId', 'content')); goto WJsLX; WJsLX: $AVLNU['time'] = $He0J8['created_at']; goto a_f1i; a_f1i: if (!empty($He0J8['_user'])) { $AVLNU['user'] = ArrayUtil::keepKeys($He0J8['_user'], array('id', 'nickname', 'avatar')); } else { $AVLNU['user'] = null; } goto SYNcI; Hdyqu: } goto d9dhc; d9dhc: return $PBpnF; goto Xx3uv; ZOaVb: $EnI2D = $EZ1JE->orderBy('id', $DrwL4)->limit($LIhQG)->get(array('*'))->toArray(); goto Ts2Wt; fcPOa: if ($FijOM >= 0) { $EZ1JE = $EZ1JE->where('id', '<', $FijOM); $DrwL4 = 'desc'; } goto DAQN4; oGUVF: $DrwL4 = 'desc'; goto fcPOa; Q8UNC: $EZ1JE = ModelUtil::model('im_chat_record')->where(array('chatType' => $wtt04, 'toId' => $GwH5l, 'isRecall' => 0)); goto oGUVF; aGwV2: $PBpnF = array(); goto ECRru; j9ucb: ModelUtil::join($EnI2D, 'userId', '_user', 'im_user', 'id'); goto NmNgF; Ts2Wt: switch ($DrwL4) { case 'asc': break; case 'desc': $EnI2D = array_reverse($EnI2D); break; } goto j9ucb; DAQN4: if ($hprYL >= 0) { $EZ1JE = $EZ1JE->where('id', '>', $hprYL); $DrwL4 = 'asc'; } goto ZOaVb; Xx3uv: } }