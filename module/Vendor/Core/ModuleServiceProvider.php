<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Core; use Illuminate\Events\Dispatcher; use Illuminate\Support\ServiceProvider; use Module\Vendor\Command\ScheduleRunAllCommand; use Module\Vendor\Command\ScheduleRunnerCommand; use Module\Vendor\Provider\Schedule\ScheduleBiz; use Module\Vendor\Schedule\DataTempCleanScheduleBiz; use Module\Vendor\Schedule\TempFileCleanScheduleBiz; class ModuleServiceProvider extends ServiceProvider { public function boot(Dispatcher $HLRQG) { $this->commands(array(ScheduleRunnerCommand::class, ScheduleRunAllCommand::class)); if (class_exists(DataTempCleanScheduleBiz::class)) { ScheduleBiz::register(DataTempCleanScheduleBiz::class); ScheduleBiz::register(TempFileCleanScheduleBiz::class); } } public function register() { } }