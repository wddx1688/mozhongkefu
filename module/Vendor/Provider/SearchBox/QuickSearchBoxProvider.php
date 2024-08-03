<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SearchBox; class QuickSearchBoxProvider extends AbstractSearchBoxProvider { protected $name; protected $title; protected $url; protected $order; public static function make($rfBQu, $xy3eh, $VwfRl, $DrwL4 = 1000) { goto w14sl; Friz4: $ZOvGj->order = $DrwL4; goto mYy6E; PKEXt: $ZOvGj->url = $VwfRl; goto Friz4; mYy6E: return $ZOvGj; goto nBgw9; yybCO: $ZOvGj->title = $xy3eh; goto PKEXt; CETWR: $ZOvGj->name = $rfBQu; goto yybCO; w14sl: $ZOvGj = new static(); goto CETWR; nBgw9: } public function name() { return $this->name; } public function title() { return $this->title; } public function url() { return $this->url; } public function order() { return $this->order; } }