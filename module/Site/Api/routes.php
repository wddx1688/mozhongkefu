<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ $router->group(array('middleware' => array()), function () use($router) { $router->match(array('post'), 'site/contact', 'SiteController@contact'); });