<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Layout\AdminConfigBuilder; class ConfigController extends Controller { public function index(AdminConfigBuilder $U2qv4) { goto rKc_Q; A1iDA: return $U2qv4->perform(); goto dFV5q; UqPn9: $U2qv4->switch('LiveChat_Enable', '开启在线客服系统'); goto A1iDA; rKc_Q: $U2qv4->pageTitle('在线客服系统设置'); goto UqPn9; dFV5q: } }