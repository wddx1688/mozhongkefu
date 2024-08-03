<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Sms; abstract class AbstractSmsSender { protected abstract function sendExecute($jU6y9, $mPYOc, $NALde, $uZEpM = array()); public function send($jU6y9, $mPYOc, $NALde, $uZEpM = array()) { return $this->sendExecute($jU6y9, $mPYOc, $NALde, $uZEpM); } }