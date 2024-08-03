<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; class QuickBannerPositionBiz extends AbstractBannerPositionBiz { protected $name; protected $title; protected $remark; public static function make($rfBQu, $xy3eh, $bv12A = null) { goto oKg9B; rjOKQ: $ZOvGj->name = $rfBQu; goto fL0x9; oKg9B: $ZOvGj = new static(); goto rjOKQ; kKpqW: $ZOvGj->remark = $bv12A; goto k7FZc; k7FZc: return $ZOvGj; goto gsJrb; fL0x9: $ZOvGj->title = $xy3eh; goto kKpqW; gsJrb: } public function name() { return $this->name; } public function title() { return $this->title; } public function remark() { return $this->remark; } }