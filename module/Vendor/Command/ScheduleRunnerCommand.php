<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Command; use Illuminate\Console\Command; use Module\Vendor\Provider\Schedule\ScheduleProvider; class ScheduleRunnerCommand extends Command { protected $signature = 'modstart:schedule-runner {name}'; public function handle() { $rfBQu = $this->argument('name'); ScheduleProvider::callByName($rfBQu); } }