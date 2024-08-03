<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Html; class HtmlConvertUtil { public static function callInterceptors($HC2Vz, $qTz8C) { goto cG41m; T26MB: if (!is_array($HC2Vz)) { $HC2Vz = array($HC2Vz); } goto zf7Qn; zf7Qn: foreach ($HC2Vz as $tRnkh) { $X0c2E = app($tRnkh); $qTz8C = $X0c2E->convert($qTz8C); } goto N0Bst; cG41m: if (empty($HC2Vz)) { return $qTz8C; } goto T26MB; N0Bst: return $qTz8C; goto LSSph; LSSph: } }