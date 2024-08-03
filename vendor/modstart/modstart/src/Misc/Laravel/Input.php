<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Illuminate\Support\Facades; class Input extends Facade { public static function get($cANPj = null, $RsCDD = null) { return static::$app['request']->input($cANPj, $RsCDD); } protected static function getFacadeAccessor() { return 'request'; } }