<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Concern\HasAdminQuickCRUD; use ModStart\Admin\Layout\AdminCRUDBuilder; use ModStart\Grid\GridFilter; use ModStart\Support\Concern\HasFields; class MemberSelectController extends Controller { use HasAdminQuickCRUD; protected function crud(AdminCRUDBuilder $U2qv4) { $U2qv4->init('member_user')->field(function ($U2qv4) { $U2qv4->id('id', 'ID'); $U2qv4->display('created_at', '创建时间'); $U2qv4->image('avatar', '头像'); $U2qv4->text('username', '用户名'); $U2qv4->text('email', '邮箱'); $U2qv4->text('phone', '手机'); })->gridFilter(function (GridFilter $RryBq) { $RryBq->eq('id', L('ID')); $RryBq->like('username', '用户名'); $RryBq->like('email', '邮箱'); $RryBq->like('phone', '手机'); })->title('用户管理')->canDelete(false); } }