<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto a2fHC; tWx5V: if (class_exists(\Module\Member\Middleware\WebAuthMiddleware::class)) { $iOPMV[] = \Module\Member\Middleware\WebAuthMiddleware::class; } goto RO5s9; a2fHC: $iOPMV = array(); goto tWx5V; RO5s9: $router->group(array('middleware' => $iOPMV), function () use($router) { $router->match(array('get'), 'site/contact', 'SiteController@contact'); });