<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use ModStart\Core\Input\Response; use Module\LiveChat\Util\AccountUtil; class StaffAccountController extends AbstractStaffController { public function all() { $EnI2D = AccountUtil::all(); return Response::generateSuccessData(array('records' => $EnI2D)); } }