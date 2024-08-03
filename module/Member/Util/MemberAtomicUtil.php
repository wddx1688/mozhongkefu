<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Exception\BizException; use Module\Member\Auth\MemberUser; use Module\Vendor\Util\AtomicUtil; class MemberAtomicUtil { public static function acquireOrFail($miOiF, $bCQ1H, $tJ6XI = null, $u0rBB = 30) { if (!self::acquire($bCQ1H, $tJ6XI, $u0rBB)) { BizException::throws($miOiF); } } public static function acquire($bCQ1H, $tJ6XI = null, $u0rBB = 30) { goto xVJEd; jVZDr: return AtomicUtil::acquire($Cc2wA, $u0rBB); goto LHDr0; xVJEd: if (null === $tJ6XI) { $tJ6XI = MemberUser::id(); } goto rFp_G; rFp_G: $Cc2wA = $bCQ1H . '_' . $tJ6XI; goto jVZDr; LHDr0: } public static function release($bCQ1H, $tJ6XI = null) { goto YYArn; YYArn: if (null === $tJ6XI) { $tJ6XI = MemberUser::id(); } goto fEDHO; w3ymU: AtomicUtil::release($Cc2wA); goto dB5uJ; fEDHO: $Cc2wA = $bCQ1H . '_' . $tJ6XI; goto w3ymU; dB5uJ: } }