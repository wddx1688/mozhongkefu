<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; use ModStart\Core\Util\EventUtil; class MemberUserLoginAttemptEvent { public $memberUserId; public $ip; public $ua; public static function fire($tJ6XI, $Vzm8o, $rCb3a) { goto dp3c3; FzGUE: EventUtil::fire($MU9DT); goto UYWjj; yRXDA: $MU9DT->memberUserId = $tJ6XI; goto ZE7lm; dp3c3: $MU9DT = new MemberUserLoginAttemptEvent(); goto yRXDA; ZE7lm: $MU9DT->ip = $Vzm8o; goto tvk4O; tvk4O: $MU9DT->ua = $rCb3a; goto FzGUE; UYWjj: } }