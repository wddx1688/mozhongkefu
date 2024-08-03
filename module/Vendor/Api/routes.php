<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto oRhLl; whcwP: if (class_exists(\Module\Member\Middleware\ApiAuthMiddleware::class)) { $iOPMV[] = \Module\Member\Middleware\ApiAuthMiddleware::class; } goto Tg8M5; oRhLl: $iOPMV = array(); goto whcwP; Tg8M5: $router->group(array('middleware' => $iOPMV), function () use($router) { $router->match(array('post'), 'captcha/image', 'CaptchaController@image'); });