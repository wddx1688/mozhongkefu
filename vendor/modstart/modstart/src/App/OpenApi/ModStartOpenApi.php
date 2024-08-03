<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\OpenApi; use Illuminate\Support\Facades\Cache; use Illuminate\Support\Facades\Route; use ModStart\ModStart; use ModStart\Module\ModuleManager; class ModStartOpenApi { private static function listModuleRoutes() { goto aPe4j; uRDCZ: return $a3n3M; goto HbS6s; aPe4j: $RwIYu = ModuleManager::listAllInstalledModulesInRequiredOrder(true); goto xWPJG; xWPJG: $a3n3M = array(); goto Kw2Kd; Kw2Kd: foreach ($RwIYu as $C1S_N) { if (file_exists($Z3orD = ModuleManager::path($C1S_N, 'OpenApi/routes.php'))) { $a3n3M[$C1S_N] = $Z3orD; } } goto uRDCZ; HbS6s: } public static function registerModuleRoutes() { goto lrA0E; mJNZP: if (file_exists($m7P8u = modstart_open_api_path('routes.php'))) { require $m7P8u; } goto M_0SJ; DY0z2: foreach ($Q9kQu as $C1S_N => $Z3orD) { Route::group(array('prefix' => config('modstart.openApi.prefix'), 'middleware' => array('openApi.bootstrap'), 'namespace' => "\\Module\\{$C1S_N}\\OpenApi\\Controller"), function ($router) use($Z3orD) { if (file_exists($Z3orD)) { require $Z3orD; } }); } goto mJNZP; lrA0E: if (config('env.APP_DEBUG')) { $Q9kQu = self::listModuleRoutes(); } else { if (method_exists(ModStart::class, 'cacheKey')) { $Q9kQu = Cache::rememberForever(ModStart::cacheKey('ModStartOpenApiRoutes'), function () { return self::listModuleRoutes(); }); } else { $Q9kQu = self::listModuleRoutes(); } } goto DY0z2; M_0SJ: } }