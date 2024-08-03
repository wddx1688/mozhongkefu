<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLoginAttemptEvent { public $adminUserId; public $ip; public $ua; public static function fire($vO92J, $i4tKa, $XMIzi) { goto f7f8e; f7f8e: $bZKZ0 = new AdminUserLoginAttemptEvent(); goto VMMne; CGoXU: $bZKZ0->ip = $i4tKa; goto nDLdQ; aCydx: EventUtil::fire($bZKZ0); goto FgLsX; nDLdQ: $bZKZ0->ua = $XMIzi; goto aCydx; VMMne: $bZKZ0->adminUserId = $vO92J; goto CGoXU; FgLsX: } }