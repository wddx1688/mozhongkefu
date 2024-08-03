<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use Module\ImServer\Constant\ImRedisConstant; class UnreadMsgRepository { public static function increase($wtt04, $GwH5l, $qzstR) { $Cc2wA = self::cacheKey($wtt04, $GwH5l); RedisRepository::hincrby($Cc2wA, $qzstR); } public static function get($wtt04, $GwH5l, $qzstR) { $Cc2wA = self::cacheKey($wtt04, $GwH5l); return intval(RedisRepository::hget($Cc2wA, $qzstR)); } public static function clear($wtt04, $GwH5l, $qzstR) { $Cc2wA = self::cacheKey($wtt04, $GwH5l); RedisRepository::hdel($Cc2wA, $qzstR); } private static function cacheKey($wtt04, $GwH5l) { return sprintf(ImRedisConstant::UNREAD_TALK, $wtt04, $GwH5l); } }