<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\ContentVerify; use Illuminate\Support\Facades\Log; use ModStart\Core\Input\Request; use ModStart\Core\Job\BaseJob; class ContentVerifyJob extends BaseJob { public $name; public $title; public $body; public $param; public static function createQuick($rfBQu, $vWdBd, $xy3eh, $DO2rl = null) { self::create($rfBQu, array('id' => $vWdBd, 'viewUrl' => $DO2rl), $xy3eh); } public static function create($rfBQu, $uZEpM, $xy3eh, $e8PBh = null) { goto ZXZUC; nxthY: app('Illuminate\\Contracts\\Bus\\Dispatcher')->dispatch($Q10Sr); goto lRyn7; zzTxA: $Q10Sr->title = $xy3eh; goto r14CP; j9DxW: $Q10Sr->name = $rfBQu; goto drPCL; ZXZUC: if (!isset($uZEpM['domainUrl'])) { $uZEpM['domainUrl'] = Request::domainUrl(); } goto PC0fX; drPCL: $Q10Sr->param = $uZEpM; goto zzTxA; r14CP: $Q10Sr->body = $e8PBh; goto nxthY; b1HMX: $Q10Sr = new static(); goto j9DxW; PC0fX: if (isset($uZEpM['viewUrl'])) { if (!preg_match('/^https?:\\/\\//', $uZEpM['viewUrl'])) { $uZEpM['viewUrl'] = $uZEpM['domainUrl'] . $uZEpM['viewUrl']; } } goto b1HMX; lRyn7: } public function handle() { goto a3TxX; B7vOI: if (empty($yHanX)) { Log::info('Vendor.ContentVerifyJob.UnknownProvider - ' . $this->name); return; } goto sIKTo; a3TxX: $yHanX = ContentVerifyBiz::getByName($this->name); goto B7vOI; sIKTo: $yHanX->run($this->param, $this->title, $this->body); goto HpkKv; HpkKv: } }