<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Amqp; use Module\ImServer\Core\Message\ChatMsg; use Module\ImServer\Core\Repository\LogRepository; use Module\ImServer\Core\Repository\RedisRepository; class RedisAmqp implements AmqpInterface { public $channel = null; private $pubsub = null; function init() { $this->pubsub = RedisRepository::clientPoll()->pubSubLoop(); $this->pubsub->subscribe($this->channel); } function listen(\Closure $xus0C) { foreach ($this->pubsub as $AF6tQ) { switch ($AF6tQ->kind) { case 'subscribe': LogRepository::log('RedisAmqp - Subscribed', $AF6tQ->channel); break; case 'message': goto tb6CX; tb6CX: $miOiF = @json_decode($AF6tQ->payload, true); goto XIJfS; x5_x1: break; goto DmdHh; XIJfS: call_user_func($xus0C, $miOiF); goto x5_x1; DmdHh: } } } function send(ChatMsg $miOiF) { RedisRepository::client()->publish($this->channel, $miOiF->toAmqpJson()); } }