<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Admin\Controller; use App\Constant\AppConstant; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Artisan; use ModStart\Admin\Auth\AdminPermission; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Request; use ModStart\Core\Input\Response; use ModStart\Core\Util\FileUtil; use Module\AdminManager\Util\ModuleUtil; use Module\AdminManager\Util\UpgradeUtil; class UpgradeController extends Controller { public static $PermitMethodMap = array('index' => '@SystemUpgrade', 'info' => '@SystemUpgrade', 'auth' => '@SystemUpgrade'); private function doFinish($WjX62, $KB0mn = null) { return Response::generateSuccessData(array('msg' => array_map(function ($AVLNU) { return '<i class="iconfont icon-hr"></i> ' . $AVLNU; }, $WjX62), 'logs' => $KB0mn, 'finish' => true)); } private function doNext($W9SYw, $WjX62 = array(), $XWlC_ = array()) { goto N0NU5; N0NU5: $ErQts = InputPackage::buildFromInput(); goto CLTwW; vBs2B: return Response::generateSuccessData(array('msg' => array_map(function ($AVLNU) { if (!starts_with($AVLNU, '<')) { $AVLNU = "<span class='ub-text-white'>{$AVLNU}</span>"; } return '<i class="iconfont icon-hr"></i> ' . $AVLNU; }, $WjX62), 'step' => $W9SYw, 'data' => $XWlC_, 'finish' => false)); goto gB5pg; CLTwW: $XWlC_ = array_merge($ErQts->getJsonAsInput('data')->all(), $XWlC_); goto vBs2B; gB5pg: } public function index() { goto jCV_2; jCV_2: if (config('modstart.admin.upgradeDisable', false)) { return Response::sendError('系统升级功能已关闭'); } goto SW5K4; JyKYH: return view('module::AdminManager.View.admin.upgrade'); goto kzYvM; SW5K4: if (Request::isPost()) { goto Id1sx; IUhRI: $W9SYw = $ErQts->getTrimString('step'); goto kjXC6; RNaRG: $n0I6W = $dvCKi->getTrimString('toVersion'); goto ra2vt; kjXC6: $qtbsi = $ErQts->getTrimString('token'); goto V375K; ra2vt: BizException::throwsIfEmpty('toVersion为空', $n0I6W); goto p69g7; Id1sx: AdminPermission::demoCheck(); goto n0Kgp; V375K: $dvCKi = $ErQts->getJsonAsInput('data'); goto RNaRG; p69g7: switch ($W9SYw) { case 'upgradePackage': goto vzWQ6; Y5tKi: return $this->doFinish(array('<span class="ub-text-success">升级完成，请 <a href="javascript:;" onclick="window.location.reload()">刷新后台</a> 查看最新系统</span>'), $FZUh3['data']['logs']); goto Fio9y; bhnlv: BizException::throwsIfEmpty('diffContentFile为空', $svc7f); goto fdk97; fdk97: $FZUh3 = UpgradeUtil::upgradePackage($WJlDi, $svc7f); goto wqjYG; vzWQ6: $WJlDi = $dvCKi->getTrimString('package'); goto LtupZ; t2PsY: BizException::throwsIfEmpty('package为空', $WJlDi); goto bhnlv; LtupZ: $svc7f = $dvCKi->getTrimString('diffContentFile'); goto t2PsY; wqjYG: BizException::throwsIfResponseError($FZUh3); goto Y5tKi; Fio9y: case 'downloadPackage': goto agPQz; agPQz: $FZUh3 = UpgradeUtil::downloadPackage($qtbsi, AppConstant::APP, AppConstant::VERSION, $n0I6W); goto oiyjJ; DkZEJ: return $this->doNext('upgradePackage', array('<span class="ub-text-success">获取安装包完成，大小 ' . FileUtil::formatByte($FZUh3['data']['packageSize']) . '</span>', '<span class="ub-text-white">开始解压升级装包...</span>'), array('package' => $FZUh3['data']['package'], 'diffContentFile' => $FZUh3['data']['diffContentFile'])); goto lSV3N; oiyjJ: BizException::throwsIfResponseError($FZUh3); goto DkZEJ; lSV3N: case 'checkPackage': goto GBlbv; fKvxd: BizException::throwsIf('调用 php artisan 命令失败，不能自动升级', 0 != $sZrkl); goto qyd08; GBlbv: try { $sZrkl = Artisan::call('migrate'); } catch (\Exception $VPhVw) { $sZrkl = -1; } goto fKvxd; qyd08: return $this->doNext('downloadPackage', array('PHP版本: v' . PHP_VERSION, '<span class="ub-text-success">预检通过</span>', '<span class="ub-text-white">开始下载升级包...</span>')); goto tbulb; tbulb: default: return $this->doNext('checkPackage', array('<span class="ub-text-success">开始升级系统，从 V' . AppConstant::VERSION . ' 到 V' . $n0I6W . '</span>', '<span class="ub-text-white">开始预检系统...</span>')); } goto Wj8Ln; n0Kgp: $ErQts = InputPackage::buildFromInput(); goto IUhRI; Wj8Ln: } goto JyKYH; kzYvM: } public function auth() { return view('module::AdminManager.View.admin.auth', array('modules' => ModuleUtil::modules())); } public function info() { $Do0xr = UpgradeUtil::latest(); return Response::generateSuccessData(array('version' => AppConstant::VERSION, 'latestVersion' => $Do0xr['latestVersion'], 'autoUpgrade' => $Do0xr['autoUpgrade'])); } }