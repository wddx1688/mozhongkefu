<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ $router->match(array('get', 'post'), 'email_smtp/config/setting', 'ConfigController@setting'); $router->match(array('get', 'post'), 'email_smtp/config/test', 'ConfigController@test');