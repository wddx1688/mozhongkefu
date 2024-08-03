<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\LazyValue; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Job\BaseJob; use ModStart\Core\Util\SerializeUtil; use Module\Vendor\Log\Logger; class LazyValueJob extends BaseJob { private $key; private $param; private $cacheSeconds; public function __construct($Cc2wA, $uZEpM, $x8hPA) { goto M0dTO; M0dTO: $this->key = $Cc2wA; goto U_CQy; U_CQy: $this->param = $uZEpM; goto aVwWP; aVwWP: $this->cacheSeconds = $x8hPA; goto qwL5b; qwL5b: } public static function create($Cc2wA, $uZEpM, $x8hPA) { goto iKtVG; iKtVG: $Q10Sr = new LazyValueJob($Cc2wA, $uZEpM, $x8hPA); goto YQxLX; fpF1D: app('Illuminate\\Contracts\\Bus\\Dispatcher')->dispatch($Q10Sr); goto CX11p; YQxLX: $Q10Sr->onQueue('LazyValueJob'); goto fpF1D; CX11p: } public static function createRefresh($Cc2wA, $uZEpM, $x8hPA) { goto Opoxj; ujVL5: app('Illuminate\\Contracts\\Bus\\Dispatcher')->dispatch($Q10Sr); goto yHMgo; WXif8: $Q10Sr->onQueue('LazyValueJobRefresh'); goto ujVL5; Opoxj: $Q10Sr = new LazyValueJob($Cc2wA, $uZEpM, $x8hPA); goto WXif8; yHMgo: } public function handle() { goto YXZRI; iQDFs: Logger::info('LazyValueJob', 'Start', array($this->key, $this->cacheSeconds, $this->param)); goto gZkbe; ye1f3: ModelUtil::update('lazy_value', array('key' => $this->key, 'param' => SerializeUtil::jsonEncode($this->param)), array('expire' => time() + $this->cacheSeconds, 'value' => SerializeUtil::jsonEncode($qTz8C))); goto prEF0; BdQYx: if (empty($gjfYG)) { throw new \Exception('LazyValueJob.Error : you should define lazy_value_processor_roots in config/app.php file'); } goto k5dsV; k5dsV: $wC6g2 = false; goto DVO7D; YXZRI: $x5GcS = time(); goto iQDFs; hThil: Logger::info('LazyValueJob', 'Result', $qTz8C); goto ye1f3; gZkbe: $gjfYG = config('app.lazy_value_processor_roots', array()); goto BdQYx; AGPtL: if (!$wC6g2) { throw new \Exception('LazyValueJob.Error : could not found processor ' . $this->key); } goto hThil; DVO7D: foreach ($gjfYG as $AJ7DM) { $TXnFr = $AJ7DM . '\\' . $this->key . 'Processor'; if (class_exists($TXnFr)) { goto Bpgzh; mzFYo: $qTz8C = $Vco2d->execute($this->param); goto rX3pq; Bpgzh: $Vco2d = new $TXnFr(); goto mzFYo; rX3pq: $wC6g2 = true; goto HY3Vx; HY3Vx: } } goto AGPtL; prEF0: Logger::info('LazyValueJob', 'End'); goto akMHt; akMHt: } }