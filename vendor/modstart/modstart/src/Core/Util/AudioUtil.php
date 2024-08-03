<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use ModStart\Core\Util\Support\MP3File; class AudioUtil { public static function mp3Duration($nhLuh) { $Z3orD = new MP3File($nhLuh); return $Z3orD->getDuration(); } }