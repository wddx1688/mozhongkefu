<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; use ModStart\Core\Util\EventUtil; class MemberUserVipChangeEvent { public $memberUserId; public $fromVipId; public $toVipId; public static function fire($tJ6XI, $nQOLy, $FNxee) { goto m58by; HPMO9: $MU9DT->memberUserId = $tJ6XI; goto TmT_B; m58by: $MU9DT = new static(); goto HPMO9; WN0q_: $MU9DT->toVipId = $FNxee; goto bU7Xz; TmT_B: $MU9DT->fromVipId = $nQOLy; goto WN0q_; bU7Xz: EventUtil::fire($MU9DT); goto Dfdoq; Dfdoq: } }