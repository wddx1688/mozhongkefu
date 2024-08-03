<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class StubUtil { public static function render($Z3orD, $XkA0X = array(), $ePQb3 = null) { goto NvFMQ; oL2T6: $XkA0X = array_build($XkA0X, function ($dKmL2, $yFWLi) { return array('${' . $dKmL2 . '}', $yFWLi); }); goto WnzK3; Db9oy: $N19iJ = file_get_contents("{$ePQb3}/{$Z3orD}.stub"); goto oL2T6; WnzK3: return str_replace(array_keys($XkA0X), array_values($XkA0X), $N19iJ); goto aiz57; NvFMQ: if (null === $ePQb3) { $ePQb3 = base_path('vendor/modstart/modstart/resources/stub'); } goto Db9oy; aiz57: } }