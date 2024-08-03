<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class CascadeGroup extends AbstractField { protected $isLayoutField = true; public static function getAssets() { return array(); } public function render() { $NS5_3 = $this->column(); return "<div class=\"ub-field-cascade-group cascade-group-hide\" id=\"{$NS5_3}\">"; } public function end() { $this->context->html($this->column() . '_end')->html('</div>')->plain(); } }