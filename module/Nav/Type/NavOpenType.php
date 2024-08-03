<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Nav\Type; use ModStart\Core\Type\BaseType; class NavOpenType implements BaseType { const CURRENT_WINDOW = 1; const NEW_BLANK = 2; public static function getList() { return array(self::CURRENT_WINDOW => '当前窗口', self::NEW_BLANK => '新窗口'); } public static function getBlankAttributeFromValue($lsIFC) { goto eURr3; A1XXj: if (is_array($lsIFC)) { $lsIFC = isset($lsIFC['openType']) ? $lsIFC['openType'] : null; } goto JTnIW; k9XND: return ''; goto oRD1p; eURr3: if (empty($lsIFC)) { return ''; } goto A1XXj; JTnIW: switch ($lsIFC) { case self::NEW_BLANK: return 'target="_blank"'; } goto k9XND; oRD1p: } }