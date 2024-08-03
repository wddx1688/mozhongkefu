<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use Illuminate\Support\Facades\View; use ModStart\Core\Util\HtmlUtil; use Module\Vendor\Html\HtmlConvertUtil; class UEditorRichContentProvider extends AbstractRichContentProvider { const NAME = 'htmlUEditor'; public function name() { return self::NAME; } public function title() { return 'UEditor富文本'; } public function render($rfBQu, $qTz8C, $uZEpM = array()) { return View::make('module::Vendor.View.widget.richContent.htmlUeditor', array('name' => $rfBQu, 'value' => $qTz8C, 'param' => $uZEpM))->render(); } public function toHtml($qTz8C, $mO8Z0 = null) { $qTz8C = HtmlUtil::filter($qTz8C); return parent::toHtml($qTz8C, $mO8Z0); } }