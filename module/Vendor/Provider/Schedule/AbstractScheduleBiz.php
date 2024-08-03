<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Schedule; abstract class AbstractScheduleBiz { public abstract function cron(); public function name() { return 'default'; } public abstract function title(); public abstract function run(); protected function cronEveryMinute() { return '* * * * *'; } protected function cronEvery10Minute() { return '*/10 * * * * *'; } protected function cronEvery30Minute() { return '0,30 * * * * *'; } protected function cronEveryDayHour24($XE1hU) { return "0 {$XE1hU} * * * *"; } protected function cronEveryDayHour24Minute($XE1hU, $N3pgd) { return "{$N3pgd} {$XE1hU} * * * *"; } protected function cronEveryHour() { return '0 * * * * *'; } protected function cronEveryDay() { return '0 0 * * * *'; } }