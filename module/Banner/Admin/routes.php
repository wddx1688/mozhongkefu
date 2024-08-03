<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto cEAji; t0foW: $router->match(array('get'), 'banner/show', 'BannerController@show'); goto piXIw; cEAji: $router->match(array('get', 'post'), 'banner', 'BannerController@index'); goto aKcnh; sWPqz: $router->match(array('post'), 'banner/delete', 'BannerController@delete'); goto t0foW; GLXfl: $router->match(array('get', 'post'), 'banner/edit', 'BannerController@edit'); goto sWPqz; aKcnh: $router->match(array('get', 'post'), 'banner/add', 'BannerController@add'); goto GLXfl; piXIw: $router->match(array('post'), 'banner/sort', 'BannerController@sort');