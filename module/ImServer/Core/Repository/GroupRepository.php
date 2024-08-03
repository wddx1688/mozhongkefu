<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use Module\ImServer\Constant\ImRedisConstant; class GroupRepository { public static function addGroupUser($AoMnT, $qzstR) { RedisRepository::sadd(sprintf(ImRedisConstant::GROUP_USER_SET, $AoMnT), $qzstR); } public static function listGroupUsers($AoMnT) { return RedisRepository::smembers(sprintf(ImRedisConstant::GROUP_USER_SET, $AoMnT)); } }