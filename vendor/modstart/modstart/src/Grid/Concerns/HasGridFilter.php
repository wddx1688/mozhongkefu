<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Concerns; use ModStart\Grid\GridFilter; trait HasGridFilter { protected $gridFilterJoins = array(); protected $gridFilter; private function setupGridFilter() { $this->gridFilter = new GridFilter($this->model); } public function getGridFilter() { return $this->gridFilter; } public function gridFilterJoins() { return $this->gridFilterJoins; } public function gridFilterJoinAdd($Meki8, $R3agm, $zPRvu, $xfg26 = null, $okCni = null) { $this->gridFilterJoins[] = array($Meki8, $R3agm, $zPRvu, $xfg26, $okCni); return $this; } }