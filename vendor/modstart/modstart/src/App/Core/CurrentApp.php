<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Core; use Illuminate\Support\Facades\Session; use ModStart\Core\Type\BaseType; class CurrentApp implements BaseType { const ADMIN = 'Admin'; const WEB = 'Web'; const OPEN_API = 'OpenApi'; const API = 'Api'; public static function getList() { return array(self::ADMIN => 'Admin', self::WEB => 'Web', self::OPEN_API => 'OpenApi', self::API => 'Api'); } public static function set($FFJb_) { Session::flash('_currentApp', $FFJb_); } public static function get() { return Session::get('_currentApp'); } public static function is($FFJb_) { return self::get() == $FFJb_; } }