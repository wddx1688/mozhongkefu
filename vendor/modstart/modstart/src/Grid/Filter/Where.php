<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; class Where extends AbstractFilter { protected $where; public $input; public function __construct(\Closure $IpOIw, $ueQYS) { goto p6TSp; Oh_Ne: $this->column = static::getQueryHash($IpOIw, $this->label); goto dNMFJ; fBqg0: $this->setupField(); goto Rgjs2; dNMFJ: $this->id = $this->formatId($this->column); goto fBqg0; p6TSp: $this->where = $IpOIw; goto vV4Q2; vV4Q2: $this->label = $this->formatLabel($ueQYS); goto Oh_Ne; Rgjs2: } public static function getQueryHash(\Closure $hB9j0, $ueQYS = '') { $bHRgd = new \ReflectionFunction($hB9j0); return md5($bHRgd->getFileName() . $bHRgd->getStartLine() . $bHRgd->getEndLine() . $ueQYS); } public function condition($dLG7_) { goto RwsbW; icZIE: if (is_null($VuXfH) || empty($VuXfH)) { return; } goto RFJ2T; RwsbW: $VuXfH = array_get($dLG7_, static::getQueryHash($this->where, $this->label)); goto yTC50; yTC50: if (is_array($VuXfH)) { $VuXfH = array_filter($VuXfH); } goto icZIE; RFJ2T: $this->input = $this->value = $VuXfH; goto J7OFb; J7OFb: return $this->buildCondition($this->where->bindTo($this)); goto uYXEb; uYXEb: } }