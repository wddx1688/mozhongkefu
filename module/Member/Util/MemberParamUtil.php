<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Exception\BizException; class MemberParamUtil { public static function param() { return array('{id}' => '用户ID', '{username}' => '用户名'); } public static function replaceParam($n3GvS, $CRCLA) { goto RGhTo; CCHBO: foreach ($rKRDI as $U8G_W) { $uZEpM['{' . $U8G_W . '}'] = isset($CRCLA[$U8G_W]) ? $CRCLA[$U8G_W] : ''; } goto AKPZC; lon3b: $rKRDI = array('id', 'username'); goto pLPjK; AKPZC: return str_replace(array_keys($uZEpM), array_values($uZEpM), $n3GvS); goto cFERc; pLPjK: $uZEpM = array(); goto CCHBO; RGhTo: BizException::throwsIfEmpty('用户为空', $CRCLA); goto Sb1cI; Sb1cI: if (!is_array($CRCLA)) { $CRCLA = MemberUtil::getCached($CRCLA); } goto lon3b; cFERc: } public static function paramTitle() { return '<a href="javascript:;" data-dialog-request="' . modstart_admin_url('member/config/param') . '"><i class="iconfont icon-code"></i> 动态变量</a>'; } }