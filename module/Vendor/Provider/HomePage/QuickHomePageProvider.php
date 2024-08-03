<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\HomePage; class QuickHomePageProvider extends AbstractHomePageProvider { protected $type; protected $title; protected $action; public static function make($xy3eh, $yA25I, $mhShF = array(self::TYPE_PC, self::TYPE_MOBILE)) { goto CXm9l; nGU5F: $ZOvGj->type = $mhShF; goto gurWV; Gq3w9: return $ZOvGj; goto HHAFU; CXm9l: $ZOvGj = new static(); goto nGU5F; gurWV: $ZOvGj->title = $xy3eh; goto Nwr_8; Nwr_8: $ZOvGj->action = $yA25I; goto Gq3w9; HHAFU: } public function type() { return $this->type; } public function title() { return $this->title; } public function action() { return $this->action; } }