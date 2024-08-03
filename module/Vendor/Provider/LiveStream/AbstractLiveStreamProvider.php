<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LiveStream; use ModStart\Form\Form; abstract class AbstractLiveStreamProvider { public abstract function name(); public abstract function title(); public abstract function getPushUrl($Knu3S, $syt67, $uZEpM = array()); public abstract function getPlayUrl($Knu3S, $syt67, $uZEpM = array()); public function pushFields(Form $yAhCR) { } }