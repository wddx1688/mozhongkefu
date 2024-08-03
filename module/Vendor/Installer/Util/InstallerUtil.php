<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Installer\Util; class InstallerUtil { public static function checkForInstallRedirect() { goto JiuJ8; JiuJ8: $CNE0K = base_path('.env'); goto PfZ5n; PfZ5n: $mHRbi = storage_path('install.lock'); goto VJ26S; VJ26S: if (!file_exists($mHRbi)) { header('Location: ' . modstart_web_url('install.php')); die; } goto nd6Kp; nd6Kp: } }