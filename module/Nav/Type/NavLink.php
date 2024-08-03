<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Type; class NavLink { public static function generate($xl0xG, $uZEpM = array()) { goto dTDms; dTDms: if (empty($xl0xG)) { return ''; } goto TSmI1; TgdLE: return $xl0xG; goto E1jVy; TSmI1: if (is_array($xl0xG)) { $xl0xG = isset($xl0xG['link']) ? $xl0xG['link'] : null; } goto S7Row; S7Row: if (!empty($uZEpM)) { $rKRDI = array_map(function ($AVLNU) { return '{' . $AVLNU . '}'; }, array_keys($uZEpM)); $xl0xG = str_replace($rKRDI, array_values($uZEpM), $xl0xG); } goto TgdLE; E1jVy: } }