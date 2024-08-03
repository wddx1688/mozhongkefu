<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; use Illuminate\Support\Facades\Log; use ModStart\Core\Util\SerializeUtil; class DefaultNotifierProvider extends AbstractNotifierProvider { public function name() { return 'Default'; } public function title() { return '默认日志'; } public function notify($UegGl, $xy3eh, $n3GvS, $uZEpM = array()) { Log::info(sprintf('Vendor.DefaultNotifierProvider - %s - %s - %s', $UegGl, $xy3eh, SerializeUtil::jsonEncode($n3GvS, JSON_UNESCAPED_UNICODE))); } }