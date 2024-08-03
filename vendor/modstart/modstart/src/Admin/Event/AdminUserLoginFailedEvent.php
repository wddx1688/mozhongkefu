<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Event; use ModStart\Core\Util\EventUtil; class AdminUserLoginFailedEvent { public $adminUserId; public $username; public $ip; public $ua; public static function fire($vO92J, $QKAda, $i4tKa, $XMIzi) { goto VoQy6; ApZNs: $bZKZ0->ip = $i4tKa; goto FVEou; jbmDi: $bZKZ0->username = $QKAda; goto ApZNs; VoQy6: $bZKZ0 = new AdminUserLoginFailedEvent(); goto MbCYt; MbCYt: $bZKZ0->adminUserId = $vO92J; goto jbmDi; FVEou: $bZKZ0->ua = $XMIzi; goto w21GI; w21GI: EventUtil::fire($bZKZ0); goto Z77IA; Z77IA: } }