<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Type; class SortDirection implements BaseType { const UP = 'up'; const DOWN = 'down'; const TOP = 'top'; const BOTTOM = 'bottom'; public static function getList() { return array(self::UP => L('Up'), self::DOWN => L('Down'), self::TOP => L('Top'), self::BOTTOM => L('Bottom')); } }