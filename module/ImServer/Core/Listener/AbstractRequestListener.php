<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Listener; use Module\ImServer\Core\Message\ChatMsg; abstract class AbstractRequestListener { public abstract function requests(); public function permit($U1CFU, ChatMsg $miOiF) { return true; } }