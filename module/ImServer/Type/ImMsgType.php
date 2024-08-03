<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Type; use ModStart\Core\Type\BaseType; class ImMsgType implements BaseType { const PING = 'ping'; const PONG = 'pong'; const ERROR = 'error'; const USER_ONLINE = 'userOnline'; const USER_OFFLINE = 'userOffline'; const TALK = 'talk'; const RECALL = 'recall'; const INPUT = 'input'; const UNREAD_CLEAR = 'unreadClear'; const REQUEST = 'request'; const PUSH = 'push'; public static function getList() { return array(); } }