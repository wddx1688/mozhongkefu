<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; class Nav extends AbstractWidget { protected $view = 'modstart::widget.nav'; protected $navs = ''; protected $classList = ''; public function __construct($JnID8, $ew5sY = '') { goto N33T6; rfBZW: $this->classList = $ew5sY; goto DQ70t; PhGGf: $this->navs = $JnID8; goto rfBZW; N33T6: parent::__construct(); goto PhGGf; DQ70t: } public static function make($JnID8, $ew5sY = '') { return new static($JnID8, $ew5sY); } public function navs($JnID8) { $this->navs = $JnID8; return $this; } public function classList($ew5sY) { $this->classList = $ew5sY; return $this; } public function variables() { return array('navs' => $this->navs, 'classList' => $this->classList); } }