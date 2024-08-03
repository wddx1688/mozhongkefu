<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Amqp; use ModStart\Core\Exception\BizException; class AmqpFactory { public static function make() { goto gAXFc; o9uQs: BizException::throws('Amqp IM_SERVER_AMQP_TYPE ERROR'); goto EISGb; kSor7: $glWpb = config('env.IM_SERVER_AMQP_TYPE', 'redis'); goto faiCf; fZ89r: if (null !== $OtCdv) { return $OtCdv; } goto kSor7; faiCf: switch ($glWpb) { case 'redis': goto GIqZ_; z3f5y: return $OtCdv; goto s4B0j; C57hk: $OtCdv->channel = env('env.IM_SERVER_AMQP_REDIS_CHANNEL', 'imServerMessage'); goto YHkPa; GIqZ_: $OtCdv = new RedisAmqp(); goto C57hk; YHkPa: $OtCdv->init(); goto z3f5y; s4B0j: } goto o9uQs; gAXFc: static $OtCdv = null; goto fZ89r; EISGb: } }