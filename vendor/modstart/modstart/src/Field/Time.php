<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Time extends AbstractField { public function unserializeValue($VuXfH, AbstractField $dBa7F) { if ('' === $VuXfH || null === $VuXfH) { return null; } return $VuXfH; } public function serializeValue($VuXfH, $Wa8N4) { if ('' === $VuXfH || null === $VuXfH) { return null; } return $VuXfH; } public function prepareInput($VuXfH, $Wa8N4) { if ('' === $VuXfH || null === $VuXfH) { return null; } return $VuXfH; } }