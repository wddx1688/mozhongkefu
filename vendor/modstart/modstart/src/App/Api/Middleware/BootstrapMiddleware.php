<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Api\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\AccessGate; use ModStart\App\Core\CurrentApp; use ModStart\Core\Input\Response; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { private static $gates = array(); public static function addGate($iCXib) { self::$gates[] = $iCXib; } public function handle(Request $mHrWb, \Closure $g0nKp) { goto krApZ; HnkxR: FieldManager::registerBuiltinFields(); goto cWNHn; Na3_3: return $g0nKp($mHrWb); goto fiXht; krApZ: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::API); } goto UXBd_; wuM3H: if (file_exists($FO0QK = modstart_admin_path('bootstrap.php'))) { require $FO0QK; } goto Na3_3; cWNHn: WidgetManager::registerBuiltinWidgets(); goto wuM3H; UXBd_: foreach (self::$gates as $DUr2V) { goto xXstJ; TJwEf: $nMi2c = $E3pBM->check($mHrWb); goto cfdqk; xXstJ: $E3pBM = app($DUr2V); goto TJwEf; cfdqk: if (Response::isError($nMi2c)) { return $nMi2c; } goto yF5ow; yF5ow: } goto HnkxR; fiXht: } }