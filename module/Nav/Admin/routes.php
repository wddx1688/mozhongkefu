<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto ttjZi; ttjZi: $router->match(array('get', 'post'), 'nav', 'NavController@index'); goto zyDPS; iegw9: $router->match(array('post'), 'nav/delete', 'NavController@delete'); goto gMKdw; gMKdw: $router->match(array('get'), 'nav/show', 'NavController@show'); goto OZNIA; zyDPS: $router->match(array('get', 'post'), 'nav/add', 'NavController@add'); goto SFhJ1; SFhJ1: $router->match(array('get', 'post'), 'nav/edit', 'NavController@edit'); goto iegw9; OZNIA: $router->match(array('post'), 'nav/sort', 'NavController@sort');