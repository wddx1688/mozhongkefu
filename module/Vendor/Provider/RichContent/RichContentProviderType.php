<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RichContent; use ModStart\Core\Type\BaseType; class RichContentProviderType implements BaseType { public static function getList() { return array_build(RichContentProvider::all(), function ($U8G_W, $gghxW) { return array($gghxW->name(), $gghxW->title()); }); } }