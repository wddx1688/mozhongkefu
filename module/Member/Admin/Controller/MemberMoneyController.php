<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Auth\AdminPermission; use ModStart\Admin\Layout\AdminDialogPage; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Core\Util\CRUDUtil; use ModStart\Form\Form; use Module\Member\Util\MemberMoneyUtil; class MemberMoneyController extends Controller { public static $PermitMethodMap = array('*' => '\\Module\\Member\\Admin\\Controller\\MemberController@index'); public function charge(AdminDialogPage $ZkvUG) { goto rPZqK; t87pO: return $ZkvUG->pageTitle('积分变更')->body($yAhCR)->handleForm($yAhCR, function (Form $yAhCR) use($tJ6XI) { AdminPermission::demoCheck(); $XWlC_ = $yAhCR->dataForming(); ModelUtil::transactionBegin(); MemberMoneyUtil::change($tJ6XI, $XWlC_['change'], $XWlC_['remark']); ModelUtil::transactionCommit(); return Response::redirect(CRUDUtil::jsDialogCloseAndParentRefresh()); }); goto DIt21; i1ohb: $yAhCR->showSubmit(false)->showReset(false); goto t87pO; ryHpm: $yAhCR->display('_total', '余额')->value(MemberMoneyUtil::getTotal($tJ6XI))->addable(true); goto I9kjg; K4wI6: $yAhCR = Form::make(''); goto ryHpm; LhRjd: $yAhCR->text('remark', '说明')->defaultValue('系统变更')->required(); goto i1ohb; rPZqK: $tJ6XI = InputPackage::buildFromInput()->getInteger('memberUserId'); goto K4wI6; I9kjg: $yAhCR->decimal('change', '金额')->help('负数表示减少')->required(); goto LhRjd; DIt21: } }