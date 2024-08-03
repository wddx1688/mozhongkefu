<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\Response; class DialogWebController extends Controller { public function setting() { return Response::generateSuccessData(array('theme' => 'a')); } }