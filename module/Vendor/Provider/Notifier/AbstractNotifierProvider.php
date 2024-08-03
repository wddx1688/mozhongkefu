<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; abstract class AbstractNotifierProvider { public function name() { return null; } public function title() { return null; } public abstract function notify($UegGl, $xy3eh, $n3GvS, $uZEpM = array()); }