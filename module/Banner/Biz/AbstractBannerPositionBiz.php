<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Biz; abstract class AbstractBannerPositionBiz { public abstract function name(); public abstract function title(); public function remark() { return null; } }