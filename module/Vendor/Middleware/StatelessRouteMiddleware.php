<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Middleware; class StatelessRouteMiddleware { public function handle($Sh3_E, \Closure $JNgx0) { config()->set('session.driver', 'array'); return $JNgx0($Sh3_E); } }