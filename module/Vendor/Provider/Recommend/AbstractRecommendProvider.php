<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Recommend; abstract class AbstractRecommendProvider { public abstract function name(); public abstract function title(); public abstract function itemUpdate($UegGl, $eOvnN, $k1UIn = 0, $RgJUd = array(), $uZEpM = array()); public abstract function itemDelete($UegGl, $eOvnN, $uZEpM = array()); public abstract function itemTrash($UegGl, $uZEpM = array()); public abstract function itemCount($UegGl, $uZEpM = array()); public abstract function itemFeedback($UegGl, $eOvnN, $qzstR, $mhShF, $uZEpM = array()); public abstract function randomItem($UegGl, $qzstR, $LIhQG = 1, $BR1jO = array(), $RgJUd = array(), $T9jzA = array(), $uZEpM = array()); }