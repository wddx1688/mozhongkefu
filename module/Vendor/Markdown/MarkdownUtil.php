<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Markdown; use Illuminate\Support\Str; class MarkdownUtil { public static function convertToHtml($ofr8A) { goto JJ5uH; gCa2w: return $zW01P->convertToHtml($ofr8A); goto yhsn9; JJ5uH: if (PHP_VERSION_ID >= 80000) { return Str::of($ofr8A)->markdown(); } goto Ws4ON; Ws4ON: $zW01P = new MarkConverter(array('renderer' => array('soft_break' => '<br />'))); goto gCa2w; yhsn9: } }