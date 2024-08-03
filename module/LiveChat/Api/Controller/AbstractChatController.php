<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Session; abstract class AbstractChatController extends Controller { protected function user($Cc2wA = null, $yiNQ6 = null) { goto cDdWL; xJlGm: return isset($t9mtn[$Cc2wA]) ? $t9mtn[$Cc2wA] : $yiNQ6; goto oDEYA; cDdWL: $t9mtn = Session::get('_liveChatUser', null); goto hXvW_; hXvW_: if (empty($t9mtn)) { return $yiNQ6; } goto xJlGm; oDEYA: } protected function userId() { return $this->user('id', 0); } }