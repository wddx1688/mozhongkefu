<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; abstract class AbstractSuperSearchBiz { public abstract function name(); public abstract function title(); public abstract function providerName(); public abstract function fields(); public function syncBatch(AbstractSuperSearchProvider $yHanX, $t5ef1) { $EnI2D = array(); return array('count' => count($EnI2D), 'nextId' => $t5ef1); } }