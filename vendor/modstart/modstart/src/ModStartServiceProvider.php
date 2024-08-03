<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart; use Illuminate\Foundation\AliasLoader; use Illuminate\Support\Facades\Blade; use Illuminate\Support\Facades\Cache; use Illuminate\Support\Facades\Log; use Illuminate\Support\Facades\Route; use Illuminate\Support\Facades\URL; use Illuminate\Support\Facades\View; use Illuminate\Support\ServiceProvider; use Illuminate\Support\Str; use ModStart\Admin\ModStartAdmin; use ModStart\App\Api\ModStartApi; use ModStart\App\OpenApi\ModStartOpenApi; use ModStart\App\Web\ModStartWeb; use ModStart\Core\Input\Request; use ModStart\Core\Monitor\DatabaseMonitor; use ModStart\Core\Monitor\HttpMonitor; use ModStart\Core\Monitor\StatisticMonitor; use ModStart\Core\Util\ShellUtil; use ModStart\Module\ModuleManager; class ModStartServiceProvider extends ServiceProvider { protected $commands = array(\ModStart\Command\ModuleInstallCommand::class, \ModStart\Command\ModuleUninstallCommand::class, \ModStart\Command\ModuleEnableCommand::class, \ModStart\Command\ModuleDisableCommand::class, \ModStart\Command\ModuleInstallAllCommand::class, \ModStart\Command\ModuleRefreshAllCommand::class, \ModStart\Command\ModuleLinkAssetCommand::class); protected $routeMiddleware = array('admin.bootstrap' => \ModStart\Admin\Middleware\BootstrapMiddleware::class, 'admin.auth' => \ModStart\Admin\Middleware\AuthMiddleware::class, 'web.bootstrap' => \ModStart\App\Web\Middleware\BootstrapMiddleware::class, 'api.bootstrap' => \ModStart\App\Api\Middleware\BootstrapMiddleware::class, 'api.session' => \ModStart\App\Api\Middleware\SessionMiddleware::class, 'openApi.bootstrap' => \ModStart\App\OpenApi\Middleware\BootstrapMiddleware::class); public function boot() { goto VwPHZ; z51n5: ModStartOpenApi::registerModuleRoutes(); goto iWWq8; Krim8: $this->publishes(array(__DIR__ . '/../asset' => public_path('asset')), 'modstart'); goto uY3UG; iWWq8: ModStartWeb::registerModuleRoutes(); goto Wd_3D; uY3UG: $this->publishes(array(__DIR__ . '/../resources/lang' => base_path('resources/lang')), 'modstart'); goto Y2kGk; BKOHv: if (!config('modstart.admin.disabled', false)) { ModStartAdmin::registerAuthRoutes(); ModStartAdmin::registerModuleRoutes(); } goto zcgHt; Y2kGk: $this->registerModuleServiceProviders(); goto BKOHv; Xgqfm: $this->loadViewsFrom(base_path('module'), 'module'); goto LBOYJ; zcgHt: ModStartApi::registerModuleRoutes(); goto z51n5; LBOYJ: $this->loadTranslationsFrom(__DIR__ . '/../lang/', 'modstart'); goto Krim8; VwPHZ: $this->loadViewsFrom(__DIR__ . '/../views', 'modstart'); goto Xgqfm; Wd_3D: } public function register() { goto fE3jG; Zjpis: $this->setupMonitor(); goto gSBza; Wy8hX: $this->registerRoutePattern(); goto Zjpis; LvKQl: $OjbEJ = config('modstart.forceSchema'); goto I3_cq; I3_cq: if (empty($OjbEJ)) { $OjbEJ = @getenv('FORCE_SCHEMA'); } goto Ruvcn; Yi6q9: if ($HQwyy) { URL::forceRootUrl($HQwyy); } goto LvKQl; u7ha2: $this->mergeConfigFrom(__DIR__ . '/../config/env.php', 'env'); goto M9z9C; ytG6T: $this->app->booting(function () { $no_TE = AliasLoader::getInstance(); $no_TE->alias('ModStart', \ModStart\Core\Facades\ModStart::class); }); goto k0Kps; gSBza: if (config('modstart.xForwardedHostVisitRedirect', true)) { if (!ShellUtil::isCli()) { goto g0x31; dAUXg: if ($AiLtg && $diycn && $AiLtg != $diycn) { goto ENV2X; osjmc: foreach ($d9VxP as $JBDIU) { if (Str::contains($AiLtg, $JBDIU)) { $nIH3s = true; break; } } goto UaV7X; spqSp: $nIH3s = false; goto osjmc; ENV2X: $d9VxP = array('localhost', '127.0.0.1'); goto spqSp; UaV7X: if (!$nIH3s) { goto vrh4j; nPSUm: die; goto O2fZX; GG_Lx: header('Location: ' . $vqlrZ); goto nPSUm; SwC_H: Log::info('xForwardedHostVisitRedirect - ' . $AiLtg . ' to ' . $vqlrZ); goto Vq2OY; Vq2OY: header('HTTP/1.1 301 Moved Permanently'); goto GG_Lx; vrh4j: $vqlrZ = Request::domainUrl() . Request::basePathWithQueries(); goto SwC_H; O2fZX: } goto UiaYR; UiaYR: } goto Qketa; g0x31: $AiLtg = Request::headerGet('x-forwarded-host'); goto XHBd3; XHBd3: $diycn = Request::domain(); goto dAUXg; Qketa: } } goto YGax_; fE3jG: $this->mergeConfigFrom(__DIR__ . '/../config/modstart.php', 'modstart'); goto u7ha2; KMyyz: $this->registerBladeDirectives(); goto Wy8hX; xiOZA: $this->mergeConfigFrom(__DIR__ . '/../config/data.php', 'data'); goto V2HjA; veaAJ: $this->commands($this->commands); goto KMyyz; k0Kps: $this->app->singleton('modstartConfig', config('modstart.config.driver')); goto D2czY; e3IzX: if (empty($HQwyy)) { $HQwyy = @getenv('SUBDIR_URL'); } goto Yi6q9; Ruvcn: if ($OjbEJ) { if (ModStart::env() == 'laravel5') { URL::forceSchema($OjbEJ); } else { URL::forceScheme($OjbEJ); } } goto PfxfU; PfxfU: View::share('__msRoot', config('modstart.subdir')); goto ytG6T; D2czY: $this->registerRouteMiddleware(); goto veaAJ; V2HjA: $HQwyy = config('modstart.subdirUrl'); goto e3IzX; M9z9C: $this->mergeConfigFrom(__DIR__ . '/../config/module.php', 'module'); goto xiOZA; YGax_: } private function listModuleServiceProviders() { goto Plqxr; XK1_M: foreach (array('Core', 'Admin\\Core', 'Web\\Core', 'Api\\Core', 'OpenApi\\Core') as $FFJb_) { $xqqfG = "\\App\\{$FFJb_}\\ModuleServiceProvider"; if (class_exists($xqqfG)) { $nQYo_[] = $xqqfG; } } goto fiH4s; fiH4s: return $nQYo_; goto bEZ4m; YIULZ: $RwIYu = ModuleManager::listAllEnabledModules(); goto V7Oox; Plqxr: $nQYo_ = array(); goto YIULZ; V7Oox: foreach ($RwIYu as $C1S_N => $Wos7B) { goto WUt81; lDEdr: if (empty($tKVmk['providers'])) { continue; } goto MXhnA; TYAL4: $tKVmk = ModuleManager::getModuleBasic($C1S_N); goto lDEdr; MXhnA: $nQYo_ = array_merge($nQYo_, $tKVmk['providers']); goto LGQv0; Qr61W: if (class_exists($xqqfG)) { $nQYo_[] = $xqqfG; } goto TYAL4; WUt81: $xqqfG = "\\Module\\{$C1S_N}\\Core\\ModuleServiceProvider"; goto Qr61W; LGQv0: } goto XK1_M; bEZ4m: } public function registerModuleServiceProviders() { if (config('env.APP_DEBUG')) { $S5LBb = $this->listModuleServiceProviders(); } else { if (method_exists(ModStart::class, 'cacheKey')) { $S5LBb = Cache::rememberForever(ModStart::cacheKey('ModStartServiceProviders'), function () { return $this->listModuleServiceProviders(); }); } else { $S5LBb = $this->listModuleServiceProviders(); } } foreach ($S5LBb as $xqqfG) { if (class_exists($xqqfG)) { $this->app->register($xqqfG); } } } private function registerRoutePattern() { goto lx9S9; lx9S9: Route::pattern('id', '[0-9]+'); goto kbSer; Cv8X7: Route::pattern('alias_url', '[a-zA-Z0-9_]+'); goto rqqm0; kbSer: Route::pattern('alias', '[a-zA-Z0-9]+'); goto Cv8X7; rqqm0: Route::pattern('locale', '[a-z]{2}'); goto o0f05; o0f05: } private function setupMonitor() { goto UA3Es; UA3Es: DatabaseMonitor::init(); goto el5Jw; el5Jw: HttpMonitor::init(); goto KYZ5W; KYZ5W: StatisticMonitor::init(); goto RUogz; RUogz: } private function registerRouteMiddleware() { $router = app('router'); foreach ($this->routeMiddleware as $cANPj => $q47AX) { if (PHP_VERSION_ID >= 80000) { $router->aliasMiddleware($cANPj, $q47AX); } else { $router->middleware($cANPj, $q47AX); } } } private function registerBladeDirectives() { $this->app->singleton('assetPathDriver', config('modstart.asset.driver')); Blade::directive('asset', function ($arv2d = '') use(&$OsZgv) { if (empty($arv2d)) { return ''; } if (PHP_VERSION_ID > 80000) { $aSSlF = '/(.+)/i'; } else { $aSSlF = '/\\((.+)\\)/i'; } if (preg_match($aSSlF, $arv2d, $jRzIK)) { goto oA9Lu; SCYaj: return $q01jQ->getCDN($Z3orD) . $q01jQ->getPathWithHash($Z3orD); goto xA4Ei; y2zxZ: $q01jQ = app('assetPathDriver'); goto SCYaj; oA9Lu: $Z3orD = trim($jRzIK[1], '\'" "'); goto y2zxZ; xA4Ei: } else { return ''; } }); } }