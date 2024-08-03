<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Exception; use ModStart\Core\Input\Response; class ResultException extends \Exception { public static function throwsIfFail($nMi2c) { if (Response::isError($nMi2c)) { throw new ResultException($nMi2c['msg']); } } public static function throwsIf($BDbmq, $naNXB) { if ($naNXB) { throw new ResultException($BDbmq); } } }