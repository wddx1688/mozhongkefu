<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use NinjaMutex\Lock\MySqlLock; use NinjaMutex\MutexFabric; class DBLockUtil { static $instance = null; private static function instance() { if (null === self::$instance) { goto VHomh; U0FL6: self::$instance = $nnS04; goto MusGd; VHomh: $giroC = new MySqlLock(config('env.DB_USERNAME'), config('env.DB_PASSWORD'), config('env.DB_HOST')); goto FsyK8; FsyK8: $nnS04 = new MutexFabric('mysql', $giroC); goto U0FL6; MusGd: } return self::$instance; } public static function acquire($HQ4FM, $r2jZv = null) { if (self::instance()->get($HQ4FM)->acquireLock($r2jZv)) { return true; } return false; } public static function release($HQ4FM) { self::instance()->get($HQ4FM)->releaseLock(); } }