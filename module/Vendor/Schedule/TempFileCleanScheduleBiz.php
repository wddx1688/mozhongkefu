<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Schedule; use ModStart\Core\Util\PlatformUtil; use ModStart\Core\Util\ShellUtil; use Module\Vendor\Provider\Schedule\AbstractScheduleBiz; class TempFileCleanScheduleBiz extends AbstractScheduleBiz { public function cron() { return $this->cronEveryHour(); } public function title() { return 'temp文件自动清理'; } public function run() { goto k6knE; CSZCu: if (PlatformUtil::isWindows()) { } else { $YmK0O = 'find "' . $A1ksd . '" -mtime +7 -maxdepth 1 -exec rm -rfv {} \\;'; } goto lNx5u; k6knE: $A1ksd = public_path('temp'); goto CSZCu; lNx5u: if (!empty($YmK0O)) { ShellUtil::run($YmK0O); } goto YPCMI; YPCMI: } }