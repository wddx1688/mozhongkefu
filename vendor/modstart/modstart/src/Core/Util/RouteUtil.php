<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\Route; use Illuminate\Support\Str; class RouteUtil { public static function parseControllerMethod() { goto aaXc8; wa5mt: $brqCS = explode('@', $bpf5d); goto KJsg5; DNM4E: return array($Cr0v_, $t5CM6); goto VMjA8; KJsg5: if (isset($brqCS[0])) { $Cr0v_ = $brqCS[0]; } else { $Cr0v_ = null; } goto JvKMb; JvKMb: if (isset($brqCS[1])) { $t5CM6 = $brqCS[1]; } else { $t5CM6 = null; } goto zV2Es; aaXc8: $bpf5d = Route::currentRouteAction(); goto wa5mt; zV2Es: if (!Str::startsWith($Cr0v_, '\\')) { $Cr0v_ = '\\' . $Cr0v_; } goto DNM4E; VMjA8: } }