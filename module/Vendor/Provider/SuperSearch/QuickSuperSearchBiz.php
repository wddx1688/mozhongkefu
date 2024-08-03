<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; class QuickSuperSearchBiz extends AbstractSuperSearchBiz { protected $name; protected $title; protected $field; public function providerName() { return null; } public static function make($rfBQu, $xy3eh, $E9h4W) { goto wtu8m; wtu8m: $UegGl = new static(); goto LfzV7; LfzV7: $UegGl->name = $rfBQu; goto fYban; R2OR0: $UegGl->field = $E9h4W; goto hPdC6; hPdC6: return $UegGl; goto geXBz; fYban: $UegGl->title = $xy3eh; goto R2OR0; geXBz: } public function name() { return $this->name; } public function title() { return $this->title; } public function fields() { return $this->field; } }