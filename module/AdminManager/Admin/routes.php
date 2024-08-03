<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto Aivnp; Aivnp: $router->match(array('get', 'post'), 'upgrade', 'UpgradeController@index'); goto EQZMY; EQZMY: $router->match(array('get', 'post'), 'upgrade/info', 'UpgradeController@info'); goto SozCR; SozCR: $router->match(array('get', 'post'), 'upgrade/auth', 'UpgradeController@auth');