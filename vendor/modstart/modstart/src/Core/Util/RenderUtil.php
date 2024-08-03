<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\View; class RenderUtil { public static function view($de9hK, $nx179 = array()) { return View::make($de9hK, $nx179)->render(); } public static function viewScript($de9hK, $nx179 = array()) { goto F1O4I; ovIwN: $N19iJ = preg_replace('/^<script>/', '', $N19iJ); goto l9LPc; F1O4I: $N19iJ = trim(self::view($de9hK, $nx179)); goto ovIwN; TkOjU: return trim($N19iJ); goto XuvkL; l9LPc: $N19iJ = preg_replace('/<\\/script>$/', '', $N19iJ); goto TkOjU; XuvkL: } public static function display($N19iJ, $mhx52 = false) { goto pxfcg; ZO5Tt: $F9lIE = array('@parent' => '&#64;parent'); goto xFiKc; xFiKc: return str_replace(array_keys($F9lIE), array_values($F9lIE), $N19iJ); goto Ykw9r; pxfcg: if ($mhx52) { $N19iJ = htmlspecialchars($N19iJ); } goto ZO5Tt; Ykw9r: } }