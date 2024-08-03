<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use Illuminate\Support\Facades\Session; class MobileUtil { public static function putEntryData($Cc2wA, $qTz8C) { goto ljRV1; AvtDl: $XWlC_[$Cc2wA] = $qTz8C; goto HL8mV; D29mz: if (empty($XWlC_)) { $XWlC_ = array(); } goto AvtDl; HL8mV: Session::put('Mobile_EntryData', $XWlC_); goto tzpxK; ljRV1: $XWlC_ = Session::get('Mobile_EntryData', array()); goto D29mz; tzpxK: } public static function getEntryData() { goto Rr3MW; Rr3MW: $XWlC_ = Session::get('Mobile_EntryData', array()); goto aQ31K; QiK99: return $XWlC_; goto GCtK_; aQ31K: if (empty($XWlC_)) { $XWlC_ = new \stdClass(); } goto QiK99; GCtK_: } }