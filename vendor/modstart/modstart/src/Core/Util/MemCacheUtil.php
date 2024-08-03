<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class MemCacheUtil { private static $pool = array(); public static function remember($cANPj, $k_TMY, $CqqOx = 10) { goto cj736; qC2ik: self::put($cANPj, $VuXfH, $CqqOx); goto Zv0Bl; cj736: if (array_key_exists($cANPj, self::$pool)) { $yFWLi = self::$pool[$cANPj]; if ($yFWLi[0] === 0 || $yFWLi[0] < time()) { return $yFWLi[1]; } } goto Q1SYl; Q1SYl: $VuXfH = $k_TMY(); goto qC2ik; Zv0Bl: return $VuXfH; goto VvbgO; VvbgO: } public static function get($cANPj) { if (array_key_exists($cANPj, self::$pool)) { $yFWLi = self::$pool[$cANPj]; if ($yFWLi[0] === 0 || $yFWLi[0] < time()) { return $yFWLi[1]; } } return null; } public static function put($cANPj, $VuXfH, $CqqOx = 0) { self::$pool[$cANPj] = array($CqqOx > 0 ? time() + $CqqOx : 0, $VuXfH); } public static function forget($cANPj) { if (array_key_exists($cANPj, self::$pool)) { unset(self::$pool[$cANPj]); } } }