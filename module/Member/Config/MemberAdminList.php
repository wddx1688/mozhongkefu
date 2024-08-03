<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; class MemberAdminList { private static $gridFields = array(); public static function registerGridField(\Closure $oZLCv) { self::$gridFields[] = $oZLCv; } public static function callGridField($U2qv4) { foreach (self::$gridFields as $oZLCv) { call_user_func_array($oZLCv, array($U2qv4)); } } }