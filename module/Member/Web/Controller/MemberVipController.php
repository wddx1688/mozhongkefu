<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Web\Controller; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Module\ModuleBaseController; use ModStart\Module\ModuleManager; use Module\Member\Support\MemberLoginCheck; use Module\Member\Util\MemberVipUtil; class MemberVipController extends ModuleBaseController { private $api; public function index() { goto W3YBE; ARQTS: $this->api = app(\Module\Member\Api\Controller\MemberVipController::class); goto uhmM9; ITHx2: $m2Av0 = $ErQts->getInteger('dialog'); goto pV2JP; uhmM9: $tURZC = 'memberVip.index'; goto boDaI; W3YBE: BizException::throwsIf('缺少 PayCenter 模块', !modstart_module_enabled('PayCenter')); goto ARQTS; M33h9: return $this->view($tURZC, array('memberVips' => MemberVipUtil::allVisible(), 'memberVipRights' => MemberVipUtil::rights())); goto xhl36; boDaI: $ErQts = InputPackage::buildFromInput(); goto ITHx2; pV2JP: if ($m2Av0) { $tURZC = 'memberVip.indexDialog'; $this->shareDialogPageViewFrame(); } goto M33h9; xhl36: } }