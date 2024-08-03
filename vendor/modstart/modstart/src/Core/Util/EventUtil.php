<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\Event; class EventUtil { public static function fire($bZKZ0) { if (PHP_VERSION_ID >= 80000) { Event::dispatch($bZKZ0); } else { Event::fire($bZKZ0); } } public static function listen($OEULP, $k_TMY) { Event::listen($OEULP, function ($bZKZ0) use($k_TMY) { call_user_func($k_TMY, $bZKZ0); }); } }