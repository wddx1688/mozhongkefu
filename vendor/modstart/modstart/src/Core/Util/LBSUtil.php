<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class LBSUtil { public static function distance($ih11d, $puY5U, $H1SZ9, $d0ZQ2) { goto Wg7QC; AFter: $hgCfm = pow(sin($pyhS3 / 2), 2) + cos($k7lRw) * cos($bNfaA) * pow(sin($y78cf / 2), 2); goto zSP6V; Wg7QC: $yBuVJ = 6378137; goto jstbU; icZQV: $pyhS3 = abs($k7lRw - $bNfaA); goto GIpdX; wah4D: $k7lRw = deg2rad($puY5U); goto upe_1; jstbU: $SMKHu = deg2rad($ih11d); goto lJ8y1; GIpdX: $y78cf = abs($SMKHu - $drRBM); goto AFter; zSP6V: return intval($yBuVJ * 2 * asin(sqrt($hgCfm)) + 0.5); goto iGjGk; upe_1: $bNfaA = deg2rad($d0ZQ2); goto icZQV; lJ8y1: $drRBM = deg2rad($H1SZ9); goto wah4D; iGjGk: } public static function formatDistance($MSTvq) { if ($MSTvq > 1000) { return round($MSTvq / 1000.0, 1) . 'KM'; } else { return intval($MSTvq) . 'M'; } } public static function locationByIP($i4tKa, $EY7Cx = null) { return null; } }