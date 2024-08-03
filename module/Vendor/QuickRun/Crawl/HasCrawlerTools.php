<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Crawl; trait HasCrawlerTools { public function usePHPQuery() { require_once __DIR__ . '/libs/phpQuery-onefile.php'; } }