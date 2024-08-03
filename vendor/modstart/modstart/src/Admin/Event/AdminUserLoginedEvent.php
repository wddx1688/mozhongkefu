<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLoginedEvent { public $adminUserId; public $ip; public $ua; public static function fire($vO92J, $i4tKa, $XMIzi) { goto x2eWp; a2VC4: $bZKZ0->ip = $i4tKa; goto KGFft; x2eWp: $bZKZ0 = new AdminUserLoginedEvent(); goto SWA9M; SWA9M: $bZKZ0->adminUserId = $vO92J; goto a2VC4; KGFft: $bZKZ0->ua = $XMIzi; goto OSXuc; OSXuc: EventUtil::fire($bZKZ0); goto DesAS; DesAS: } }