<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Command; use Illuminate\Console\Command; use ModStart\Core\Exception\BizException; use ModStart\Core\Util\FileUtil; use ModStart\Module\ModuleManager; class ModuleLinkAssetCommand extends Command { protected $signature = 'modstart:module-link-asset {module}'; public function handle() { goto alDQN; ZTte1: if (file_exists($fgJM5)) { $this->error("The [{$V6Vx4}] link already exists."); return; } goto vGVcT; nodOZ: $atg0D = ModuleManager::relativePath($C1S_N, 'Asset'); goto pRaC9; pRaC9: $KCdFQ = ModuleManager::path($C1S_N, 'Asset'); goto Yao6n; OwMFX: BizException::throwsIf('模块不存在', !ModuleManager::isExists($C1S_N)); goto nodOZ; vGVcT: FileUtil::link($KCdFQ, $fgJM5); goto mUN8x; QmdpH: $fgJM5 = public_path($V6Vx4); goto ZTte1; mUN8x: $this->info("The [{$V6Vx4}] link has been connected to [{$atg0D}]"); goto YqVXG; alDQN: $C1S_N = $this->argument('module'); goto OwMFX; Yao6n: $V6Vx4 = "vendor/{$C1S_N}"; goto QmdpH; YqVXG: } }