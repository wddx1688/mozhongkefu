<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Command; use Illuminate\Console\Command; use Illuminate\Support\Facades\Artisan; use ModStart\Core\Util\FileUtil; class ModuleRefreshAllCommand extends Command { protected $signature = 'modstart:module-refresh-all'; public function handle() { goto wr3bR; HWNGv: $XChuh = trim(Artisan::output()); goto yh7Yi; K9TFn: $this->warn('ModuleRefreshAll Finished'); goto WrLYz; eYQhN: $this->info('>>> Finished
'); goto SoCUm; zh7xo: FileUtil::rm(public_path('asset')); goto InPbV; yh7Yi: $this->info('ExitCode -> ' . $hmkXe); goto s37b5; fryEN: $hmkXe = Artisan::call('vendor:publish', array('--provider' => 'ModStart\\ModStartServiceProvider')); goto tOEPQ; tOEPQ: $XChuh = trim(Artisan::output()); goto KIdOt; ZplDY: $this->info('>>> Publish Asset'); goto fryEN; KIdOt: $this->info('ExitCode -> ' . $hmkXe); goto dW1P7; VLy2Z: $hmkXe = Artisan::call('modstart:module-install-all'); goto HWNGv; ROkPj: $this->info('>>> CleanOldAsset'); goto zh7xo; wF1_A: $this->info('>>> Finished
'); goto K9TFn; SoCUm: $this->info('>>> Reinstall Modules'); goto VLy2Z; wr3bR: $this->info('ModuleRefreshAll Start'); goto ROkPj; s37b5: $this->info($XChuh); goto wF1_A; dW1P7: $this->info($XChuh); goto eYQhN; InPbV: $this->info('>>> Finished
'); goto ZplDY; WrLYz: } }