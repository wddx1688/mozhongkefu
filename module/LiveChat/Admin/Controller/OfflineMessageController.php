<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Concern\HasAdminQuickCRUD; use ModStart\Admin\Layout\AdminCRUDBuilder; use ModStart\Grid\GridFilter; use ModStart\Support\Concern\HasFields; use Module\Member\Util\MemberFieldUtil; class OfflineMessageController extends Controller { use HasAdminQuickCRUD; protected function crud(AdminCRUDBuilder $U2qv4) { MemberFieldUtil::register(); $U2qv4->init('live_chat_offline_message')->field(function ($U2qv4) { $U2qv4->id('id', 'ID'); $U2qv4->adminMemberInfo('memberUserId', '关联用户'); $U2qv4->text('name', '称呼'); $U2qv4->text('contact', '联系方式'); $U2qv4->textarea('content', '留言内容'); $U2qv4->display('created_at', L('Created At'))->listable(false); $U2qv4->display('updated_at', L('Updated At'))->listable(false); })->gridFilter(function (GridFilter $RryBq) { $RryBq->eq('id', L('ID')); $RryBq->like('name', '称呼'); })->title('离线留言'); } }