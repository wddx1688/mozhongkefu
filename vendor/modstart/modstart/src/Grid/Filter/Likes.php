<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Likes extends AbstractFilter { public function condition($SPnSA) { if (isset($SPnSA['likes']) && is_array($SPnSA['likes'])) { goto oRoe6; oRoe6: $twGc7 = array(); goto xU6ke; xU6ke: foreach ($SPnSA['likes'] as $akOto) { if (empty($akOto)) { continue; } $twGc7[] = $this->buildCondition($this->column, 'like', "%{$akOto}%"); } goto WAF9P; WAF9P: if (!empty($twGc7)) { return $twGc7; } goto u3kp5; u3kp5: } return null; } public function groupTags($fGKyg, $y62lu = null) { goto FAgdj; CZLCX: $this->field->serializeType($y62lu); goto oqV7U; oqV7U: return $this; goto pE1Lv; FAgdj: $this->field = new Field\GroupTags($this); goto d8Kaf; d8Kaf: $this->field->options($fGKyg); goto CZLCX; pE1Lv: } }