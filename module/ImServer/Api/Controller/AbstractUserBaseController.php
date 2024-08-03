<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Api\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Session; abstract class AbstractUserBaseController extends Controller { protected function userId() { return intval(Session::get('imServerUserId', 0)); } protected function user($Cc2wA = null, $yiNQ6 = null) { goto KFlFs; I71Cr: if (empty($t9mtn)) { return $t9mtn; } goto rGIq3; sazhJ: return isset($t9mtn[$Cc2wA]) ? $t9mtn[$Cc2wA] : $yiNQ6; goto w4s26; rGIq3: if (null === $Cc2wA) { return $t9mtn; } goto sazhJ; KFlFs: $t9mtn = Session::get('_imServerUser'); goto I71Cr; w4s26: } }