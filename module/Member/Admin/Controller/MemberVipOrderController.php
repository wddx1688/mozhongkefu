<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Concern\HasAdminQuickCRUD; use ModStart\Admin\Layout\AdminCRUDBuilder; use ModStart\Core\Type\TypeUtil; use ModStart\Field\AbstractField; use ModStart\Grid\GridFilter; use ModStart\Support\Concern\HasFields; use Module\Member\Util\MemberCmsUtil; use Module\Member\Util\MemberVipUtil; use Module\Vendor\Type\OrderStatus; class MemberVipOrderController extends Controller { use HasAdminQuickCRUD; protected function crud(AdminCRUDBuilder $U2qv4) { $U2qv4->init('member_vip_order')->field(function ($U2qv4) { $U2qv4->display('id', '业务订单ID'); $U2qv4->datetime('created_at', '创建时间'); $U2qv4->display('memberUserId', '用户')->hookRendering(function (AbstractField $E9h4W, $AVLNU, $oPu4k) { return MemberCmsUtil::showFromId($AVLNU->memberUserId); }); $U2qv4->display('type', '订单类型'); $U2qv4->display('vipId', 'VIP')->hookRendering(function (AbstractField $E9h4W, $AVLNU, $oPu4k) { return MemberVipUtil::get($AVLNU->vipId, 'title'); }); $U2qv4->display('payFee', '支付金额'); $U2qv4->type('status', '状态')->type(OrderStatus::class); $U2qv4->display('expire', '执行后会员过期时间')->width(200); })->gridFilter(function (GridFilter $RryBq) { $RryBq->eq('id', '业务订单ID'); $RryBq->eq('memberUserId', '用户ID'); $RryBq->eq('vipId', 'VIP')->select(MemberVipUtil::mapTitle()); $RryBq->eq('status', '状态')->select(array(OrderStatus::WAIT_PAY => TypeUtil::name(OrderStatus::class, OrderStatus::WAIT_PAY), OrderStatus::COMPLETED => TypeUtil::name(OrderStatus::class, OrderStatus::COMPLETED))); })->disableCUD()->canShow(false)->title('用户VIP订单'); } }