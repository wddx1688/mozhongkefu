<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Util; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Dao\ModelUtil; class UserUtil { public static function processDefault(&$t9mtn) { if (empty($t9mtn)) { return; } if (empty($t9mtn['avatar'])) { $t9mtn['avatar'] = AssetsUtil::fixFull('asset/image/avatar.svg', false); } } public static function get($vWdBd) { $t9mtn = ModelUtil::get('live_chat_user', $vWdBd); return $t9mtn; } public static function update($vWdBd, $XWlC_) { ModelUtil::update('live_chat_user', $vWdBd, $XWlC_); } }