<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; use Module\Vendor\Provider\BizTrait; class NotifierBiz { use BizTrait; public static function registerQuick($rfBQu, $xy3eh) { self::register(new QuickNotifierBiz($rfBQu, $xy3eh)); } }