<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Config; use Illuminate\Support\Str; class MemberHomeIcon { private static $menu = array(); public static function register($qei2R) { self::$menu[] = $qei2R; } public static function get() { goto sWPEv; v8ubK: foreach (self::$menu as $AVLNU) { if ($AVLNU instanceof \Closure) { $AVLNU = call_user_func($AVLNU); } $qei2R = array_merge($qei2R, $AVLNU); } goto OaNBE; OaNBE: $qei2R = self::mergeMenu($qei2R); goto m7RHa; m7RHa: return $qei2R; goto SLbDw; sWPEv: $qei2R = array(); goto v8ubK; SLbDw: } private static function sort() { static $p3Gtl = 1000; return $p3Gtl++; } private static function mergeMenu($qei2R, $bCQ1H = '', $jUaC8 = 1, $RryBq = null) { goto UFXW3; UFXW3: if (empty($qei2R)) { return array(); } goto mC0Zi; FhNSv: if ($jUaC8 == 1) { uasort($DmwGe, function ($EnX8D, $ioTcP) { return $EnX8D['sort'] - $ioTcP['sort']; }); return self::mergeMenuTree($DmwGe); } goto LpSpv; mC0Zi: $DmwGe = array(); goto ToOxz; LpSpv: return $DmwGe; goto PG9ZO; ToOxz: foreach ($qei2R as $AVLNU) { goto mixha; mixha: if (empty($AVLNU)) { continue; } goto fqxhQ; WVxTH: unset($DmwGe[$U8G_W]['children']); goto iRQT8; ClIfZ: if (!isset($AVLNU['sort'])) { $AVLNU['sort'] = self::sort(); } goto DJqXL; iRQT8: if (!empty($AVLNU['children'])) { $DmwGe = array_merge($DmwGe, self::mergeMenu($AVLNU['children'], $U8G_W . '^^', $jUaC8 + 1, $RryBq)); } goto XBkVQ; fqxhQ: if ($RryBq) { if (!call_user_func($RryBq, $AVLNU)) { continue; } } goto ClIfZ; zSnRj: if (!isset($DmwGe[$U8G_W])) { $DmwGe[$U8G_W] = $AVLNU; } goto WVxTH; DJqXL: if (1 == $jUaC8) { $U8G_W = $bCQ1H . $AVLNU['title'] . '^' . $AVLNU['sort']; } else { $U8G_W = $bCQ1H . $AVLNU['title']; } goto zSnRj; XBkVQ: } goto FhNSv; PG9ZO: } private static function mergeMenuTree($H3Pp3, $bCQ1H = '') { goto s3gxv; kozaZ: return $UVD7p; goto y5Rm_; vL1o3: foreach ($H3Pp3 as $U8G_W => $gghxW) { goto x2fJW; xBbA0: if (empty($AVLNU['children'])) { unset($AVLNU['children']); } goto WMVRt; x2fJW: if ($U8G_W === $bCQ1H) { continue; } goto p0cJI; xX84n: if ($bCQ1H) { if (!Str::startsWith($U8G_W, $bCQ1H)) { continue; } if (count(explode('^^', $bCQ1H)) !== count(explode('^^', $U8G_W))) { continue; } } else { if (1 != count($hIzdA)) { continue; } } goto YZ8Cf; unUJJ: $AVLNU['children'] = self::mergeMenuTree($H3Pp3, $U8G_W . '^^'); goto xBbA0; WMVRt: if (empty($AVLNU['children']) && empty($AVLNU['url'])) { continue; } goto DEKDv; p0cJI: $hIzdA = explode('^^', $U8G_W); goto xX84n; DEKDv: $UVD7p[] = $AVLNU; goto oJjeA; YZ8Cf: $AVLNU = $gghxW; goto unUJJ; oJjeA: } goto kozaZ; s3gxv: $UVD7p = array(); goto vL1o3; y5Rm_: } }