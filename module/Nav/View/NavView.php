<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\View; use Illuminate\Support\Facades\View; class NavView { public static function position($s2RTs) { return View::make('module::Nav.View.inc.nav', array('position' => $s2RTs))->render(); } }