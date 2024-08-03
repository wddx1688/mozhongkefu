<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Concern\HasAdminQuickCRUD; use ModStart\Admin\Layout\AdminCRUDBuilder; use ModStart\Form\Form; use ModStart\Grid\GridFilter; use ModStart\Support\Concern\HasFields; use Module\Member\Util\MemberVipUtil; class MemberVipRightController extends Controller { public static $PermitMethodMap = array('*' => '\\Module\\Member\\Admin\\Controller\\MemberVipSetController@index'); public function __construct() { $this->useGridDialogPage(); } use HasAdminQuickCRUD; protected function crud(AdminCRUDBuilder $U2qv4) { $U2qv4->init('member_vip_right')->field(function ($U2qv4) { $U2qv4->checkbox('vipIds', 'VIP等级')->optionModel('member_vip_set', 'id', 'title')->required(); $U2qv4->text('title', '标题')->required(); $U2qv4->text('desc', '描述')->required(); $U2qv4->image('image', '图标')->required(); $U2qv4->display('created_at', L('Created At'))->listable(false); $U2qv4->display('updated_at', L('Updated At'))->listable(false); })->gridFilter(function (GridFilter $RryBq) { $RryBq->like('title', '名称'); })->enablePagination(false)->defaultOrder(array('sort', 'asc'))->canSort(true)->canShow(false)->title('权益设置')->addDialogSize(array('600px', '95%'))->editDialogSize(array('600px', '95%'))->hookSaved(function (Form $yAhCR) { MemberVipUtil::clearCache(); }); } }