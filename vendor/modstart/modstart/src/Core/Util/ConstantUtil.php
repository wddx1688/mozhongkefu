<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class ConstantUtil { public static function dump($iCXib) { return (new \ReflectionClass($iCXib))->getConstants(); } }