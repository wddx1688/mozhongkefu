<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Detail\Type; use ModStart\Core\Type\BaseType; class DetailEngine implements BaseType { const BASIC = 'basic'; const TREE = 'tree'; const TREE_MASS = 'treeMass'; public static function getList() { return array(self::BASIC => self::BASIC, self::TREE => self::TREE, self::TREE_MASS => self::TREE_MASS); } }