<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Type; use ModStart\Core\Type\BaseType; class AdminWidgetLinkType implements BaseType { const WEB = 'web'; const MOBILE = 'mobile'; public static function getList() { return array(self::WEB => '电脑端', self::MOBILE => '移动端'); } public static function icon($qTz8C) { switch ($qTz8C) { case self::WEB: return 'fa fa-desktop'; case self::MOBILE: return 'fa fa-mobile'; } return ''; } }