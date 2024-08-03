<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto yNNPH; yNNPH: $router->match(array('get', 'post'), 'tecmz/upgrade', 'UpgradeController@index'); goto eN4pf; eN4pf: $router->match(array('get', 'post'), 'tecmz/upgrade/manual', 'UpgradeController@manual'); goto niRzv; niRzv: $router->match(array('get', 'post'), 'tecmz/upgrade/info', 'UpgradeController@info');