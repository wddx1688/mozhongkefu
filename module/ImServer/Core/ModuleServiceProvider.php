<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core; use Illuminate\Events\Dispatcher; use Illuminate\Support\ServiceProvider; use ModStart\Module\ModuleClassLoader; use Module\ImServer\Command\ImServerWorkerCommand; define('IM_SERVER_ID', uniqid()); class ModuleServiceProvider extends ServiceProvider { public function boot(Dispatcher $HLRQG) { goto jxBLw; haPPh: ModuleClassLoader::addNamespaceIfMissing('GatewayWorker', __DIR__ . '/../SDK/gateway-worker/src'); goto ZSs29; Nx1xy: config(array('database.redis.imServer' => $f6INX)); goto nwZJ2; LZq13: $this->commands(array(ImServerWorkerCommand::class)); goto zDDyF; jxBLw: ModuleClassLoader::addNamespaceIfMissing('Workerman', __DIR__ . '/../SDK/workerman'); goto haPPh; ZSs29: $f6INX = array('host' => config('env.IM_SERVER_REDIS_HOST', config('env.REDIS_HOST', 'localhost')), 'password' => config('env.IM_SERVER_REDIS_PASSWORD', config('env.REDIS_PASSWORD', null)), 'port' => config('env.IM_SERVER_REDIS_PORT', config('env.REDIS_PORT', 6379)), 'database' => config('env.IM_SERVER_REDIS_DATABASE', config('env.REDIS_DATABASE', 0))); goto Nx1xy; nwZJ2: config(array('database.redis.imServerPoll' => array_merge($f6INX, array('read_write_timeout' => 0)))); goto LZq13; zDDyF: } public function register() { } }