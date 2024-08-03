<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field\Type; use ModStart\Core\Type\BaseType; class CustomFieldType implements BaseType { const TYPE_TEXT = 'Text'; const TYPE_RADIO = 'Radio'; const TYPE_FILE = 'File'; const TYPE_FILES = 'Files'; public static function getList() { return array(self::TYPE_TEXT => '文本', self::TYPE_RADIO => '单选', self::TYPE_FILE => '单文件', self::TYPE_FILES => '多文件'); } public static function isValid($EY7Cx) { $bx4aO = static::getList(); return isset($bx4aO[$EY7Cx]); } }