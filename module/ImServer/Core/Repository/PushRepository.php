<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use Module\ImServer\Core\Amqp\Amqp; use Module\ImServer\Core\Message\ChatMsg; use Module\ImServer\Core\Model\UserModel; class PushRepository { public static function toUsers($swc4I, ChatMsg $miOiF) { $miOiF->amqp(array('toUserIds' => $swc4I)); Amqp::sendMsg($miOiF); } public static function toBizUsers($UegGl, $rlYPX, ChatMsg $miOiF) { $swc4I = UserModel::listBizUserIds($UegGl, $rlYPX); self::toUsers($swc4I, $miOiF); } }