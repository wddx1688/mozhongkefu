<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use Module\ImServer\Constant\ImRedisConstant; class ServerRepository { const RUN_OVERTIME = 35; public static function serverId() { return IM_SERVER_ID; } public static function register() { RedisRepository::hset(ImRedisConstant::SERVER_ALIVE_MAP, self::serverId(), time()); } public static function unregister() { RedisRepository::hdel(ImRedisConstant::SERVER_ALIVE_MAP, self::serverId()); } public static function getServerRunIdAll($mhShF = 'running') { goto w0TrH; V4HmT: if ($mhShF == 'all') { return $dNut6; } goto WG_1E; heLbA: return array_filter($dNut6, function ($qTz8C) use($B3QPQ, $mhShF) { if ($mhShF == 'running') { return $B3QPQ - intval($qTz8C) <= self::RUN_OVERTIME; } else { return $B3QPQ - intval($qTz8C) > self::RUN_OVERTIME; } }); goto uWiaB; w0TrH: $dNut6 = RedisRepository::hgetall(ImRedisConstant::SERVER_ALIVE_MAP); goto V4HmT; WG_1E: $B3QPQ = time(); goto heLbA; uWiaB: } }