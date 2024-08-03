<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; class MemberDocController extends Controller { public function get() { goto dJlrV; aMDdD: $mhShF = $ErQts->getTrimString('type'); goto Ui_7j; Ui_7j: BizException::throwsIf('类型错误', !in_array($mhShF, array('agreement', 'privacy'))); goto l8VAl; l8VAl: return Response::generateSuccessData(array('title' => modstart_config('Member_' . ucfirst($mhShF) . 'Title'), 'content' => modstart_config('Member_' . ucfirst($mhShF) . 'Content'))); goto CBKOx; dJlrV: $ErQts = InputPackage::buildFromInput(); goto aMDdD; CBKOx: } }