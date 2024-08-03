<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ $router->group(array('middleware' => array(\Module\ImServer\Api\Middleware\UserAuthMiddleware::class)), function () use($router) { $router->match(array('post'), 'im_server/service/get', 'ServiceController@get'); $router->match(array('post'), 'im_server/service/history', 'ServiceController@history'); $router->match(array('post'), 'im_server/service/processed', 'ServiceController@processed'); });