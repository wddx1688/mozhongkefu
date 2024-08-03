<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SiteTemplate; class QuickSiteTemplateProvider extends AbstractSiteTemplateProvider { private $name; private $title; private $root; public static function make($rfBQu, $xy3eh, $AJ7DM = null) { goto B1jfx; YJKXi: $Vco2d->root = $AJ7DM; goto APBmY; APBmY: return $Vco2d; goto QUeIg; GhLZ7: $Vco2d->name = $rfBQu; goto PVA6c; B1jfx: $Vco2d = new static(); goto GhLZ7; PVA6c: $Vco2d->title = $xy3eh; goto YJKXi; QUeIg: } public function title() { return $this->title; } public function name() { return $this->name; } public function root() { return $this->root; } }