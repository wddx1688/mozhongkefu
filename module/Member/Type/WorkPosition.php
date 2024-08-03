<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Type; use ModStart\Core\Type\BaseType; class WorkPosition implements BaseType { public static function getList() { goto T5Tw8; T5Tw8: static $VQao2 = null; goto Q8W6d; rjIgB: return $VQao2; goto l3WL3; Q8W6d: if (null === $VQao2) { $VQao2 = array(); foreach (array('普通职工', '中层管理者', '高层管理者', '企业主') as $AVLNU) { $VQao2[$AVLNU] = $AVLNU; } } goto rjIgB; l3WL3: } }