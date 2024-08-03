<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Crawl; use Illuminate\Console\Command; use ModStart\Core\Util\CodeUtil; use ModStart\Core\Util\FileUtil; class CrawlerRunnerCommand extends Command { protected $signature = 'crawler-runner {path}'; private $crawlers = array(); public function handle() { goto VNtN8; VNtN8: $eGUxe = $this->argument('path'); goto PxNNu; o3bKn: foreach ($this->crawlers as $O12bS) { goto N3Og1; N3Og1: $O12bS->init(); goto B9zH9; B9zH9: app()->call(array($O12bS, 'setup')); goto zxkKS; zxkKS: $O12bS->run(); goto wTTnX; wTTnX: } goto Fj8E1; Fj8E1: $this->info('CrawlerRunner: Run End'); goto D1MJx; KJasT: $this->info('CrawlerRunner: ' . count($this->crawlers) . ' Crawler(s) Found'); goto rYjXh; Qkx__: $this->info('CrawlerRunner: Run Start'); goto o3bKn; D1_qE: if (empty($this->crawlers)) { $this->info('CrawlerRunner: No Crawler Found'); return; } goto KJasT; PxNNu: if (is_file($eGUxe)) { goto Pn7kv; uOy26: $X0c2E = app($TXnFr); goto EAG7G; Pn7kv: $TXnFr = CodeUtil::getFullClassNameForContent(file_get_contents($eGUxe)); goto uOy26; EAG7G: $this->crawlers[] = $X0c2E; goto OlFC5; OlFC5: } else { $mnt2N = FileUtil::listFiles($eGUxe, '*.php'); foreach ($mnt2N as $n8fWJ) { goto c3dwc; k_1lj: $X0c2E = app($TXnFr); goto PsGv1; c3dwc: $TXnFr = CodeUtil::getFullClassNameForContent(file_get_contents($n8fWJ['pathname'])); goto LF0hj; rw6oc: $this->crawlers[] = $X0c2E; goto mZZrs; PsGv1: if (!$X0c2E instanceof AbstractCrawler || preg_match('/\\Abstract[A-Za-z0-9_]+$/', $TXnFr)) { continue; } goto rw6oc; LF0hj: if (preg_match('/\\\\Abstract[A-Za-z0-9_]+$/', $TXnFr)) { continue; } goto k_1lj; mZZrs: } } goto D1_qE; rYjXh: foreach ($this->crawlers as $O12bS) { $this->info('    > ' . get_class($O12bS)); } goto Qkx__; D1MJx: } }