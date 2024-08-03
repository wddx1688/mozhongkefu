<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\OpenApi\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\AccessGate; use ModStart\App\Core\CurrentApp; use ModStart\Core\Input\Response; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { private static $gates = array(); public static function addGate($iCXib) { self::$gates[] = $iCXib; } public function handle(Request $mHrWb, \Closure $g0nKp) { goto rYD3a; tBWZ_: FieldManager::registerBuiltinFields(); goto xEmQZ; xEmQZ: WidgetManager::registerBuiltinWidgets(); goto oZ7PU; GgP2p: foreach (self::$gates as $DUr2V) { goto mtZxL; ec7zP: if (Response::isError($nMi2c)) { return $nMi2c; } goto O7dX6; mtZxL: $E3pBM = app($DUr2V); goto QCTtM; QCTtM: $nMi2c = $E3pBM->check($mHrWb); goto ec7zP; O7dX6: } goto tBWZ_; oZ7PU: if (file_exists($FO0QK = modstart_open_api_path('bootstrap.php'))) { require $FO0QK; } goto m2_cW; m2_cW: return $g0nKp($mHrWb); goto XiEME; rYD3a: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::OPEN_API); } goto GgP2p; XiEME: } }