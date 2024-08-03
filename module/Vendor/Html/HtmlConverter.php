<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Html; use ModStart\Core\Util\HtmlUtil; use Module\Vendor\Markdown\MarkdownUtil; class HtmlConverter { public static function convertToHtml($yjlXg, $n3GvS, $HC2Vz = null) { goto LL3QM; LL3QM: switch ($yjlXg) { case HtmlType::RICH_TEXT: $ZpNyF = HtmlUtil::filter($n3GvS); break; case HtmlType::MARKDOWN: goto tVhgH; tVhgH: $ZpNyF = MarkdownUtil::convertToHtml($n3GvS); goto j8ov8; v9CoS: break; goto OtWIm; j8ov8: $ZpNyF = HtmlUtil::filter($ZpNyF); goto v9CoS; OtWIm: case HtmlType::SIMPLE_TEXT: $ZpNyF = HtmlUtil::text2html($n3GvS); break; default: throw new \Exception('HtmlConverter.convertToHtml contentType error'); } goto FMTr9; XaK2B: return $ZpNyF; goto hJ_zf; FMTr9: if (!empty($HC2Vz)) { if (is_array($HC2Vz)) { foreach ($HC2Vz as $tRnkh) { $Vco2d = new $tRnkh(); $ZpNyF = $Vco2d->convert($ZpNyF); } } else { $Vco2d = new $HC2Vz(); $ZpNyF = $Vco2d->convert($ZpNyF); } } goto XaK2B; hJ_zf: } }