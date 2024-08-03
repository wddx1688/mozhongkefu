<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\CurrentApp; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { public function handle(Request $mHrWb, \Closure $g0nKp) { goto cbIoN; cbIoN: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::ADMIN); } goto Fvclc; CxbEA: if (file_exists($FO0QK = modstart_admin_path('bootstrap.php'))) { require $FO0QK; } goto MYDuL; MYDuL: return $g0nKp($mHrWb); goto bAjvT; iwOh2: WidgetManager::registerBuiltinWidgets(); goto CxbEA; Fvclc: FieldManager::registerBuiltinFields(); goto iwOh2; bAjvT: } }