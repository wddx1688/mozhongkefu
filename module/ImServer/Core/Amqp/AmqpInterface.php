<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Amqp; use Module\ImServer\Core\Message\ChatMsg; interface AmqpInterface { function init(); function listen(\Closure $xus0C); function send(ChatMsg $miOiF); }