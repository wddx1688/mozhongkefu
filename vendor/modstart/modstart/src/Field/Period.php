<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Period extends AbstractField { public function unserializeValue($VuXfH, AbstractField $dBa7F) { return $VuXfH; } public function serializeValue($VuXfH, $Wa8N4) { return $VuXfH; } public function prepareInput($VuXfH, $Wa8N4) { goto wITTJ; O72g_: $T5p2v = array(isset($YkA9c[0]) ? $YkA9c[0] : 0, isset($YkA9c[1]) ? $YkA9c[1] : 0, isset($YkA9c[2]) ? $YkA9c[2] : 0); goto qjzJ7; wITTJ: $YkA9c = explode(':', $VuXfH); goto O72g_; qjzJ7: foreach ($T5p2v as $dKmL2 => $yFWLi) { $T5p2v[$dKmL2] = max(intval($yFWLi), 0); } goto ggTku; ggTku: return sprintf('%02d:%02d:%02d', $T5p2v[0], $T5p2v[1], $T5p2v[2]); goto ZUIk0; ZUIk0: } }