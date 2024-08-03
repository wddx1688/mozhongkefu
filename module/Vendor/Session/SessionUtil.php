<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Session; use Illuminate\Support\Facades\Session; use Module\Vendor\Util\AtomicUtil; class SessionUtil { public static function atomicProduce($rfBQu, $qTz8C, $u0rBB = 3600) { AtomicUtil::produce("{$rfBQu}:" . Session::getId(), $qTz8C, $u0rBB); } public static function atomicConsume($rfBQu) { return AtomicUtil::consume("{$rfBQu}:" . Session::getId()); } public static function atomicRemove($rfBQu) { AtomicUtil::remove("{$rfBQu}:" . Session::getId()); } }