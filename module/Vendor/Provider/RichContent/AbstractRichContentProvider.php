<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use Module\Vendor\Html\HtmlConvertUtil; abstract class AbstractRichContentProvider { public abstract function name(); public abstract function title(); public abstract function render($rfBQu, $qTz8C, $uZEpM = array()); public function toHtml($qTz8C, $mO8Z0 = null) { return HtmlConvertUtil::callInterceptors($mO8Z0, $qTz8C); } }