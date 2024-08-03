<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Type; use ModStart\Core\Type\BaseType; class WorkSalary implements BaseType { public static function getList() { goto FlPBg; FlPBg: static $VQao2 = null; goto oc8KG; GOY1D: return $VQao2; goto j3T5G; oc8KG: if (null === $VQao2) { $VQao2 = array(); foreach (array('2000元以下', '2000-3999元', '4000-5999元', '6000-9999元', '10000-14999元', '15000-19999元', '20000-49999元', '50000元以上') as $AVLNU) { $VQao2[$AVLNU] = $AVLNU; } } goto GOY1D; j3T5G: } }