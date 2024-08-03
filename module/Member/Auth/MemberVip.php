<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Auth; use Module\Member\Util\MemberVipUtil; class MemberVip { public static function get($Cc2wA = null, $BHEh0 = null) { goto Otk5F; H9nLg: if (null === $bKLUw) { $bKLUw = MemberVipUtil::getMemberVip(MemberUser::user()); } goto kwDqS; Otk5F: static $bKLUw = null; goto H9nLg; kwDqS: if (null !== $Cc2wA) { return isset($bKLUw[$Cc2wA]) ? $bKLUw[$Cc2wA] : $BHEh0; } goto oyQeG; oyQeG: return $bKLUw; goto DNI3D; DNI3D: } public static function isDefault() { return self::get('isDefault', false); } public static function id() { return self::get('id', 0); } public static function is($X0ZF5) { goto Mj2Ny; BjfPM: return in_array(self::id(), $X0ZF5); goto d93P1; y0cj1: if (!is_array($X0ZF5)) { $X0ZF5 = array($X0ZF5); } goto BjfPM; Mj2Ny: if (empty($X0ZF5)) { return false; } goto y0cj1; d93P1: } }