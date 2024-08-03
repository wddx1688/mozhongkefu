<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ $router->group(array('middleware' => array(\Module\Member\Middleware\WebAuthMiddleware::class)), function () use($router) { $router->match(array('get', 'post'), 'live_chat/staff', 'StaffController@index'); $router->match(array('get', 'post'), 'live_chat/chat/{channel?}', 'ChatController@index'); $router->match(array('get', 'post'), 'live_chat/chat_preview', 'ChatController@preview'); });