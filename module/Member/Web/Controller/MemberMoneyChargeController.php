<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Web\Controller; use Module\Member\Support\MemberLoginCheck; use ModStart\Core\Exception\BizException; class MemberMoneyChargeController extends MemberFrameController implements MemberLoginCheck { private $api; public function __construct(\Module\Member\Api\Controller\MemberMoneyChargeController $ZFzMa) { parent::__construct(); $this->api = $ZFzMa; } public function index() { BizException::throwsIf('钱包充值未开启', !modstart_config('Member_MoneyChargeEnable', false)); return $this->view('memberMoneyCharge.index', array('pageTitle' => '钱包充值')); } }