<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Provider; use Module\Vendor\Provider\HomePage\AbstractHomePageProvider; class LiveChatHomePageProvider extends AbstractHomePageProvider { const ACTION = '\\Module\\LiveChat\\Web\\Controller\\IndexController@index'; public function title() { return '在线客服'; } public function action() { return self::ACTION; } }