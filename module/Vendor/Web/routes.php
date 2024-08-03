<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto YKi32; LdQzu: $router->match(array('get', 'post'), 'install/lock', 'InstallController@lock'); goto GR72e; BFqVD: $router->match(array('get'), 'placeholder/{width}x{height}', '\\Module\\Vendor\\Web\\Controller\\PlaceholderController@index'); goto nupwt; GR72e: $router->match(array('get'), 'captcha/image', 'CaptchaController@image'); goto ujk6s; ujk6s: $router->match(array('get'), 'session', 'SessionController@index'); goto BFqVD; mtT6O: $router->match(array('get', 'post'), 'install/prepare', 'InstallController@prepare'); goto PQAye; YKi32: $router->match(array('get', 'post'), 'install/ping', 'InstallController@ping'); goto mtT6O; PQAye: $router->match(array('get', 'post'), 'install/execute', 'InstallController@execute'); goto LdQzu; nupwt: $router->group(array('middleware' => array(\Module\Vendor\Middleware\NoneLoginOperateAuthMiddleware::class)), function () use($router) { $router->match(array('get', 'post'), 'content_verify/{name}', 'ContentVerifyController@index'); });