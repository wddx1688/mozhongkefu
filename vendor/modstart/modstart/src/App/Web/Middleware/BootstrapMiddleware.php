<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Web\Middleware; use Illuminate\Http\Request; use ModStart\App\Core\AccessGate; use ModStart\App\Core\CurrentApp; use ModStart\Core\Input\Response; use ModStart\Support\Manager\FieldManager; use ModStart\Support\Manager\WidgetManager; class BootstrapMiddleware { private static $gates = array(); public static function addGate($iCXib) { self::$gates[] = $iCXib; } public function handle(Request $mHrWb, \Closure $g0nKp) { goto VbjQy; zPZTT: if (file_exists($FO0QK = modstart_web_path('bootstrap.php'))) { require $FO0QK; } goto FZYPP; mdQZr: foreach (self::$gates as $DUr2V) { goto weUTk; m3IKJ: $nMi2c = $E3pBM->check($mHrWb); goto fQaYi; fQaYi: if (Response::isError($nMi2c)) { return $nMi2c; } goto Vv61z; weUTk: $E3pBM = app($DUr2V); goto m3IKJ; Vv61z: } goto UhnX6; IH8KP: WidgetManager::registerBuiltinWidgets(); goto zPZTT; FZYPP: return $g0nKp($mHrWb); goto gj17t; UhnX6: FieldManager::registerBuiltinFields(); goto IH8KP; VbjQy: if (method_exists(CurrentApp::class, 'set')) { CurrentApp::set(CurrentApp::WEB); } goto mdQZr; gj17t: } }