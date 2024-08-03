<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Type; class SortAddPosition implements BaseType { const HEAD = 'head'; const TAIL = 'tail'; public static function getList() { return array(self::HEAD => 'Head', self::TAIL => 'Tail'); } }