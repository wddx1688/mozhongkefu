<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Admin\Config; use ModStart\Admin\Auth\AdminPermission; use ModStart\Admin\Layout\AdminPage; use ModStart\Layout\Row; use ModStart\Widget\Box; use Module\Vendor\Provider\ContentVerify\ContentVerifyBiz; class AdminWidgetDashboard { private static $icon = array(); private static $foot = array(); public static function registerTodo($xus0C) { } public static function callTodo(Row $sDTP5) { } public static function registerIcon($xus0C) { self::$icon[] = $xus0C; } public static function callIcon(Row $sDTP5) { foreach (self::$icon as $AVLNU) { call_user_func_array($AVLNU, array($sDTP5)); } } public static function registerFoot($xus0C) { self::$foot[] = $xus0C; } public static function call(AdminPage $ZkvUG) { goto TKxuH; XL_2n: if (!empty($NyO_H)) { $ZkvUG->row(Box::make(join('', $NyO_H), '<i class="iconfont icon-details"></i> 待审核')); } goto BxyMZ; BxyMZ: foreach (self::$foot as $AVLNU) { if ($AVLNU instanceof \Closure) { call_user_func_array($AVLNU, array($ZkvUG)); } } goto sh5Ix; TKxuH: $NyO_H = array(); goto jERMQ; jERMQ: foreach (ContentVerifyBiz::listAll() as $yHanX) { if (AdminPermission::permit($yHanX->verifyRule())) { $qycSR = $yHanX->verifyCount(); if ($qycSR > 0) { goto dPsPR; isi1T: $xy3eh = $yHanX->title(); goto LDWPp; LDWPp: $NyO_H[] = "<a class='tw-mr-2 tw-mb-2 tw-inline-block tw-bg-yellow-100 tw-text-yellow-600 tw-py-1 tw-px-2 tw-rounded-2xl'\n                                     href='{$VwfRl}' data-tab-open data-tab-title='{$xy3eh}'>{$xy3eh} <span class='ub-text-danger tw-font-bold'>{$qycSR}</span> 条</a>"; goto SkzfG; dPsPR: $VwfRl = $yHanX->verifyUrl(); goto isi1T; SkzfG: } } } goto XL_2n; sh5Ix: } }