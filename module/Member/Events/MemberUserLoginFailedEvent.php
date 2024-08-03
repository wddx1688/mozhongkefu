<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; use ModStart\Core\Util\EventUtil; class MemberUserLoginFailedEvent { public $memberUserId; public $username; public $ip; public $ua; public static function fire($tJ6XI, $c_Qdc, $Vzm8o, $rCb3a) { goto z1iX1; z1iX1: $MU9DT = new MemberUserLoginFailedEvent(); goto dqFd6; UA0yD: $MU9DT->ip = $Vzm8o; goto gG3b0; gG3b0: $MU9DT->ua = $rCb3a; goto os0BZ; NXxRq: $MU9DT->username = $c_Qdc; goto UA0yD; dqFd6: $MU9DT->memberUserId = $tJ6XI; goto NXxRq; os0BZ: EventUtil::fire($MU9DT); goto A4Au2; A4Au2: } }