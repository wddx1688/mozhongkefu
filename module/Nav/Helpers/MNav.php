<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ class MNav { public static function all($s2RTs = 'head') { goto Hh1j5; Rq3Hb: foreach ($EnI2D as $k8Rwr => $gghxW) { $EnI2D[$k8Rwr]['_attr'] = \Module\Nav\Type\NavOpenType::getBlankAttributeFromValue($gghxW); } goto Qn5R9; Hh1j5: $EnI2D = \Module\Nav\Util\NavUtil::listByPositionWithCache($s2RTs); goto Rq3Hb; Qn5R9: return $EnI2D; goto dlPLb; dlPLb: } }