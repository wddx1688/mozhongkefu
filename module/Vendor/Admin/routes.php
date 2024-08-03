<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto gZ5w0; gZ5w0: $router->match(array('get', 'post'), 'widget/icon', 'WidgetIconController@index'); goto Z3Tba; Z3Tba: $router->match(array('get', 'post'), 'widget/link_select', 'WidgetLinkController@select'); goto L2r0w; L2r0w: $router->match(array('get', 'post'), 'security/second_verify', 'SecurityController@secondVerify');