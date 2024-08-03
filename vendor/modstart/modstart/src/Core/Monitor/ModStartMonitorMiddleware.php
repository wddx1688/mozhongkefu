<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Monitor; use Illuminate\Http\Request; use Illuminate\Support\Facades\Log; use ModStart\Core\Util\SerializeUtil; class ModStartMonitorMiddleware { public function handle(Request $mHrWb, \Closure $g0nKp) { goto F2Qzg; F2Qzg: $xtWCf = $g0nKp($mHrWb); goto kwkP_; kwkP_: if (defined('LARAVEL_START')) { goto ltKQ1; ypihB: $gY_Ck = $mHrWb->input(); goto eJSYd; eJSYd: $ikc2A = $mHrWb->url(); goto s2LIT; s2LIT: $lrQvV = $mHrWb->method(); goto uFq1R; BqySY: $iAI4f = DatabaseMonitor::getQueryCountPerRequest(); goto XW918; uFq1R: if ($FU6n6 > 1000) { $kKcR8 = SerializeUtil::jsonEncode($gY_Ck); Log::warning("LONG_REQUEST {$lrQvV} [{$ikc2A}] {$FU6n6}ms {$kKcR8}"); } goto BqySY; ltKQ1: $FU6n6 = round((microtime(true) - LARAVEL_START) * 1000, 2); goto ypihB; XW918: if ($iAI4f > 10) { $kKcR8 = SerializeUtil::jsonEncode($gY_Ck); Log::warning("MASS_REQUEST_SQL {$iAI4f} {$lrQvV} [{$ikc2A}] {$kKcR8} -> " . SerializeUtil::jsonEncode(DatabaseMonitor::getQueryCountPerRequestSqls())); } goto JPoVC; JPoVC: } goto HPbEE; HPbEE: return $xtWCf; goto v6S5J; v6S5J: } }