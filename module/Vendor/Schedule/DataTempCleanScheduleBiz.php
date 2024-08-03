<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Schedule; use Illuminate\Support\Facades\Log; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\TimeUtil; use ModStart\Data\AbstractDataStorage; use ModStart\Data\DataManager; use Module\Vendor\Provider\Schedule\AbstractScheduleBiz; class DataTempCleanScheduleBiz extends AbstractScheduleBiz { public function cron() { return $this->cronEveryHour(); } public function title() { return 'data_temp 文件自动清理'; } public function run() { $TnqwD = ModelUtil::model('data_temp')->where('created_at', '<', date('Y-m-d H:i:s', time() - TimeUtil::PERIOD_DAY))->limit(100)->get(array('category', 'path'))->toArray(); foreach ($TnqwD as $He0J8) { goto jAy3N; mh1pS: Log::info('Vendor.DataTempCleanScheduleBiz - ' . $eGUxe . ' deleted'); goto xlV_D; jAy3N: $eGUxe = AbstractDataStorage::DATA_TEMP . '/' . $He0J8['category'] . '/' . $He0J8['path']; goto Lt8nd; Lt8nd: try { DataManager::deleteDataTempByPath($eGUxe); } catch (\Exception $VPhVw) { print_r($VPhVw->getMessage()); die('asdf'); } goto mh1pS; xlV_D: } } }