<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Verify; use ModStart\Support\Manager\FieldManager; use Module\Vendor\QuickRun\Verify\Field\LayoutHtmlVerifyFoot; class VerifyFieldUtil { public static function register() { FieldManager::extend('layoutHtmlVerifyFoot', LayoutHtmlVerifyFoot::class); } }