<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Util; use ModStart\Core\Dao\ModelUtil; class ChannelUtil { public static function update($vWdBd, $XWlC_) { ModelUtil::update('live_chat_channel', $vWdBd, $XWlC_); } public static function get($vWdBd) { if (empty($vWdBd)) { return null; } return ModelUtil::get('live_chat_channel', $vWdBd); } public static function getByAlias($jJtRk) { return ModelUtil::get('live_chat_channel', array('alias' => $jJtRk)); } }