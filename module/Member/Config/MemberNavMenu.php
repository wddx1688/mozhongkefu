<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; use Illuminate\Support\Str; use ModStart\Core\Util\RenderUtil; class MemberNavMenu { private static $menu = array(); public static function register($qei2R) { self::$menu[] = $qei2R; } public static function get() { goto JUMEd; Xmnvv: foreach (self::$menu as $AVLNU) { if ($AVLNU instanceof \Closure) { $AVLNU = call_user_func($AVLNU); } $qei2R = array_merge($qei2R, $AVLNU); } goto MSBau; JUMEd: $qei2R = array(); goto Xmnvv; MSBau: return $qei2R; goto rCHwY; rCHwY: } public static function render() { goto MbHU6; MbHU6: $xXwen = self::get(); goto g2t2f; g2t2f: if (empty($xXwen)) { return ''; } goto KOhnH; KOhnH: return RenderUtil::view('module::Member.View.inc.memberNavMenu', array('items' => $xXwen)); goto K3C6d; K3C6d: } }