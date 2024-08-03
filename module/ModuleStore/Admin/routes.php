<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto h9MhV; JS173: $router->match(array('post'), 'module_store/disable', 'ModuleStoreController@disable'); goto CRdvI; CRdvI: $router->match(array('post'), 'module_store/upgrade', 'ModuleStoreController@upgrade'); goto QVaLl; anOcP: $router->match(array('post'), 'module_store/uninstall', 'ModuleStoreController@uninstall'); goto N_c2B; N_c2B: $router->match(array('post'), 'module_store/enable', 'ModuleStoreController@enable'); goto JS173; xHtBs: $router->match(array('post'), 'module_store/install', 'ModuleStoreController@install'); goto anOcP; aBb0e: $router->match(array('post'), 'module_store/all', 'ModuleStoreController@all'); goto xHtBs; h9MhV: $router->match(array('get', 'post'), 'module_store', 'ModuleStoreController@index'); goto aBb0e; QVaLl: $router->match(array('get', 'post'), 'module_store/config/{module}', 'ModuleStoreController@config');