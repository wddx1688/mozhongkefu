<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Render; use Illuminate\Support\Facades\View; class BannerRender { public static function position($s2RTs, $eRhqZ = '1400x400', $E1XOX = '5-2', $dD6kr = '3-2', $cMrQk = false) { goto f7DsR; eBfVm: return View::make('module::Banner.View.pc.public.banner', array('position' => $s2RTs, 'bannerSize' => $eRhqZ, 'bannerRatio' => $E1XOX, 'mobileBannerRatio' => $dD6kr, 'round' => $cMrQk))->render(); goto xnim9; ZCtT9: if (null === $dD6kr) { $dD6kr = '1-1'; } goto Zy51M; Zy51M: if (null === $cMrQk) { $cMrQk = false; } goto eBfVm; ML5iM: if (null === $E1XOX) { $E1XOX = '5-2'; } goto ZCtT9; f7DsR: if (null === $eRhqZ) { $eRhqZ = '1400x400'; } goto ML5iM; xnim9: } }