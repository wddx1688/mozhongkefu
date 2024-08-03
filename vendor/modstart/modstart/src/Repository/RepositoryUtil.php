<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use Illuminate\Support\Collection; class RepositoryUtil { public static function itemsFromArray(array $gw25s) { return collect($gw25s)->map(function ($VL0g3) { return (object) $VL0g3; }); } public static function itemFromArray($DUr2V) { return (object) $DUr2V; } public static function makeItem($Jj48h = array()) { return new EmptyItem($Jj48h); } public static function makeItems($Hroj3) { if ($Hroj3 instanceof Collection) { return $Hroj3; } return collect(array($Hroj3)); } }