<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class VersionUtil { public static function match($vRbzB, $UC4Ga) { goto BOuT3; Fh4S5: $ExmOs = array('>=', '<=', '==', '>', '<'); goto mHdIA; lH456: return version_compare($vRbzB, $UC4Ga, $xfg26); goto Q2GTK; mHdIA: $xfg26 = '=='; goto YXBQu; BOuT3: if ('*' == $UC4Ga) { return true; } goto Fh4S5; YXBQu: foreach ($ExmOs as $DUr2V) { if (starts_with($UC4Ga, $DUr2V)) { goto aex5K; qmgAU: $UC4Ga = substr($UC4Ga, strlen($DUr2V)); goto ggEL7; aex5K: $xfg26 = $DUr2V; goto qmgAU; ggEL7: break; goto ZVHga; ZVHga: } } goto lH456; Q2GTK: } public static function parse($Ldzh7) { goto TxfYC; dIuXu: if (count($YkA9c) == 1) { return array($YkA9c[0], '*'); } goto YNKVN; TxfYC: $YkA9c = explode(':', $Ldzh7); goto dIuXu; YNKVN: return array($YkA9c[0], $YkA9c[1]); goto rdC4l; rdC4l: } public static function isVersion($lfPCH) { return preg_match('/^\\d+\\.\\d+\\.\\d+$/i', $lfPCH) || preg_match('/^\\d+\\.\\d+\\.\\d+\\-(alpha|beta|release)$/i', $lfPCH) || preg_match('/^\\d+\\.\\d+\\.\\d+\\-(alpha|beta|release)\\-\\d+$/i', $lfPCH); } }