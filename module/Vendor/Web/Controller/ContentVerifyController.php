<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Web\Controller; use Illuminate\Routing\Controller; use ModStart\App\Web\Layout\WebPage; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Form\Form; use Module\Vendor\Provider\ContentVerify\ContentVerifyBiz; class ContentVerifyController extends Controller { public function index(WebPage $ZkvUG, $rfBQu) { goto y_HiM; e0I_B: if (null !== $FZUh3) { return $FZUh3; } goto GXqgQ; y_HiM: $yHanX = ContentVerifyBiz::get($rfBQu); goto PBBqW; PBBqW: BizException::throwsIfEmpty('数据异常', $yHanX); goto EKxhE; X02ie: $FZUh3 = $yHanX->buildForm($yAhCR, $uZEpM); goto e0I_B; EbjY7: $yAhCR = Form::make(''); goto X02ie; GXqgQ: return view('module::Vendor.View.contentVerify.index', array('content' => $yAhCR->render(), 'pageTitle' => '审核 · ' . $yHanX->title())); goto wxIZF; EKxhE: $uZEpM = InputPackage::buildFromInputJson('param')->all(); goto EbjY7; wxIZF: } }