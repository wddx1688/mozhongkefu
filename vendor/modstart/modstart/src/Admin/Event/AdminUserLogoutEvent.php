<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLogoutEvent { public $adminUserId; public $ip; public $ua; public static function fire($vO92J, $i4tKa, $XMIzi) { goto Ul2lS; nJxtG: $bZKZ0->ua = $XMIzi; goto yNC0y; Ul2lS: $bZKZ0 = new AdminUserLogoutEvent(); goto Q4q2Q; ULtv3: $bZKZ0->ip = $i4tKa; goto nJxtG; Q4q2Q: $bZKZ0->adminUserId = $vO92J; goto ULtv3; yNC0y: EventUtil::fire($bZKZ0); goto Gpf0D; Gpf0D: } }