<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto BDD9u; DFeSl: $router->match(array('post'), 'article/delete', 'ArticleController@delete'); goto Z2b48; X6s8y: $router->match(array('get', 'post'), 'article/edit', 'ArticleController@edit'); goto DFeSl; BDD9u: $router->match(array('get', 'post'), 'article', 'ArticleController@index'); goto X1H1x; X1H1x: $router->match(array('get', 'post'), 'article/add', 'ArticleController@add'); goto X6s8y; Z2b48: $router->match(array('get'), 'article/show', 'ArticleController@show');