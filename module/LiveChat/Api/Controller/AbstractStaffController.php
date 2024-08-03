<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Session; abstract class AbstractStaffController extends Controller { protected function account($Cc2wA = null, $yiNQ6 = null) { goto Eeo1l; Pvyv8: if (empty($B5WTe)) { return $yiNQ6; } goto XWZut; XWZut: return $B5WTe[$Cc2wA]; goto lkYqT; Eeo1l: $B5WTe = Session::get('_liveChatAccount', null); goto Pvyv8; lkYqT: } protected function accountId() { return $this->account('id', 0); } }