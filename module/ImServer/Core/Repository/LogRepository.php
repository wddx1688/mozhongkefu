<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use ModStart\Core\Util\SerializeUtil; class LogRepository { public static function log($miOiF, $XWlC_ = null) { if (null !== $XWlC_) { if (is_string($XWlC_)) { $miOiF .= ' - ' . $XWlC_; } else { $miOiF .= ' - ' . SerializeUtil::jsonEncode($XWlC_); } } echo '[INFO ] ' . date('Y-m-d H:i:s') . ' - ' . sprintf('%05d', getmypid()) . ' - ' . $miOiF . '
'; } public static function error($miOiF, $XWlC_ = null) { if (null !== $XWlC_) { if (is_string($XWlC_)) { $miOiF .= ' - ' . $XWlC_; } else { $miOiF .= ' - ' . SerializeUtil::jsonEncode($XWlC_); } } echo '[ERROR] ' . date('Y-m-d H:i:s') . ' - ' . sprintf('%05d', getmypid()) . ' - ' . $miOiF . '
'; } }