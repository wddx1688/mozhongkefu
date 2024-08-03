<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\View; use Illuminate\Support\Facades\View; class BannerView { public static function basic($s2RTs, $eRhqZ = '1400x400', $E1XOX = null, $dD6kr = null, $cMrQk = false, $jZpOw = false) { goto MXo4x; MXo4x: if (null === $eRhqZ) { $eRhqZ = '1400x400'; } goto EmJmL; EmJmL: if (null === $E1XOX) { $E1XOX = '5-2'; } goto Zxk8L; MF06B: if (null === $cMrQk) { $cMrQk = false; } goto bjRn1; bjRn1: return View::make('module::Banner.View.inc.banner', array('position' => $s2RTs, 'bannerSize' => $eRhqZ, 'bannerRatio' => $E1XOX, 'mobileBannerRatio' => $dD6kr, 'round' => $cMrQk, 'container' => $jZpOw))->render(); goto b1J8o; Zxk8L: if (null === $dD6kr) { $dD6kr = $E1XOX; } goto MF06B; b1J8o: } }