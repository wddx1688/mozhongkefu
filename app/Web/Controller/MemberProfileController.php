<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace App\Web\Controller; use ModStart\App\Web\Layout\WebConfigBuilder; use ModStart\Form\Form; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\Member\Type\Gender; use Module\Member\Web\Controller\MemberFrameController; class MemberProfileController extends MemberFrameController implements MemberLoginCheck { private $api; public function __construct() { parent::__construct(); $this->api = app(\App\Api\Controller\MemberProfileController::class); } public function index(WebConfigBuilder $VDOO_) { goto ZkPlJ; imOx4: $VDOO_->radio('gender', '性别')->optionType(Gender::class); goto jPIrw; XItyv: $VDOO_->text('username', '用户名')->readonly(true); goto imOx4; gZg2b: $VDOO_->page()->view($this->viewMemberFrame); goto XItyv; e5SRW: return $VDOO_->perform(MemberUser::user(), function (Form $tbC5I) { return $this->api->basic($tbC5I->dataForming()); }); goto vpZuh; jPIrw: $VDOO_->textarea('signature', '签名'); goto e5SRW; ZkPlJ: $VDOO_->pageTitle('基本资料'); goto gZg2b; vpZuh: } }