<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Auth; use ModStart\Core\Util\ConvertUtil; use Module\Member\Util\MemberGroupUtil; use Module\Member\Util\MemberVipUtil; class MemberGroup { public static function get($Cc2wA = null, $BHEh0 = null) { goto BxO5Z; nVop4: if (null === $kD5Yw) { $kD5Yw = MemberGroupUtil::getMemberGroup(MemberUser::user()); } goto nY7YA; nY7YA: if (null !== $Cc2wA) { return $kD5Yw ? $kD5Yw[$Cc2wA] : $BHEh0; } goto lkac5; lkac5: return $kD5Yw; goto LEoHi; BxO5Z: static $kD5Yw = null; goto nVop4; LEoHi: } public static function isDefault() { return self::get('isDefault', false); } public static function id() { return self::get('id', 0); } public static function inGroupIds($qRoWl) { return self::is($qRoWl); } public static function is($qRoWl) { goto U34If; gnBse: $vWdBd = self::get('id'); goto GQGhF; U34If: if (!is_array($qRoWl)) { $qRoWl = ConvertUtil::toArray($qRoWl); } goto gnBse; ft1es: return in_array($vWdBd, $qRoWl); goto hdwgG; GQGhF: if (empty($vWdBd)) { return false; } goto ft1es; hdwgG: } }