<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Config; class AdminConfig { private static $config = null; private static function init() { goto o0luX; jz4w5: self::$config['founderId'] = config('env.ADMIN_FOUNDER_ID', 1); goto uH6OA; o0luX: self::$config = array(); goto ptlcT; ptlcT: self::$config['demoId'] = config('env.ADMIN_DEMO_USER_ID', 0); goto jz4w5; uH6OA: } public static function set($cANPj, $VuXfH) { if (null === self::$config) { self::init(); } self::$config[$cANPj] = $VuXfH; } public static function get($cANPj = null, $RsCDD = null) { goto OarXF; OarXF: if (null === self::$config) { self::init(); } goto KsM1u; khW_k: return $RsCDD; goto g0xPD; KsM1u: if (null === $cANPj) { return self::$config; } goto qy3hx; qy3hx: if (isset(self::$config[$cANPj])) { return self::$config[$cANPj]; } goto khW_k; g0xPD: } }