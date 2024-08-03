<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field\Type; use ModStart\Core\Type\BaseType; class FieldRenderMode implements BaseType { const GRID = 'grid'; const FORM = 'form'; const DETAIL = 'detail'; public static function getList() { return array(self::GRID => self::GRID, self::FORM => self::FORM, self::DETAIL => self::DETAIL); } }