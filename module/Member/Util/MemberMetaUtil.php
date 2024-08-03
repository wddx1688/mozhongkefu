<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use Carbon\Carbon; use ModStart\Core\Dao\ModelUtil; class MemberMetaUtil { public static function set($tJ6XI, $rfBQu, $qTz8C = null) { $VSP7l = array('memberUserId' => $tJ6XI, 'name' => $rfBQu); if (is_null($qTz8C)) { ModelUtil::delete('member_meta', $VSP7l); } else { if (ModelUtil::update('member_meta', $VSP7l, array('value' => $qTz8C, 'updated_at' => Carbon::now())) <= 0) { goto ZDPaH; ZDPaH: ModelUtil::transactionBegin(); goto WTl_w; fa1Lc: if (empty($Fay2L)) { ModelUtil::insert('member_meta', array_merge($VSP7l, array('value' => $qTz8C))); } goto TVq1h; WTl_w: $Fay2L = ModelUtil::getWithLock('member_meta', $VSP7l); goto fa1Lc; TVq1h: ModelUtil::transactionCommit(); goto dpXkC; dpXkC: } } } public static function get($tJ6XI, $rfBQu) { goto i1c2v; i1c2v: $VSP7l = array('memberUserId' => $tJ6XI, 'name' => $rfBQu); goto CIaME; CIaME: $iDGyz = ModelUtil::get('member_meta', $VSP7l); goto ONxcZ; kV64g: return null; goto RVNWS; ONxcZ: if ($iDGyz) { return $iDGyz['value']; } goto kV64g; RVNWS: } }