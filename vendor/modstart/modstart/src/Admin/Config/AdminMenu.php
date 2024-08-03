<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Config; class AdminMenu { private static $menu = array(); public static function register($nkyXz) { self::$menu[] = $nkyXz; } public static function get() { goto Ldria; sqhSk: return $nkyXz; goto wDYhV; Ldria: $nkyXz = array(); goto uQnDH; uQnDH: foreach (self::$menu as $DUr2V) { if ($DUr2V instanceof \Closure) { $DUr2V = call_user_func($DUr2V); } if (isset($DUr2V['title'])) { $nkyXz = array_merge($nkyXz, array($DUr2V)); } else { $nkyXz = array_merge($nkyXz, $DUr2V); } } goto sqhSk; wDYhV: } }