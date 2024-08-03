<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\PersonVerify; abstract class AbstractPersonVerifyIdCardProvider { public abstract function name(); public abstract function title(); public abstract function verify($rfBQu, $W_3E0, $uZEpM = array()); }