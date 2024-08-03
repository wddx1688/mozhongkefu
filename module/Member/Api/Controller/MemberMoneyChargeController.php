<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use Module\Member\Auth\MemberUser; use Module\Member\Core\MemberMoneyChargePayCenterBiz; use Module\Member\Support\MemberLoginCheck; use Module\PayCenter\Support\PayCenterPerform; use Module\Vendor\Type\OrderStatus; class MemberMoneyChargeController extends Controller implements MemberLoginCheck { public function submit() { goto j1Jn3; acLuE: BizException::throwsIf('请安装 PayCenter 模块', !modstart_module_enabled('PayCenter')); goto HtHWb; Lx3KI: $DrwL4 = ModelUtil::insert('member_money_charge_order', array('status' => OrderStatus::WAIT_PAY, 'memberUserId' => MemberUser::id(), 'money' => $ECp_x)); goto acLuE; u0Qp9: $ECp_x = $ErQts->getDecimal('money'); goto umFZc; HtHWb: $TPM1W = app(PayCenterPerform::class); goto MPScE; MPScE: return $TPM1W->performSubmitOrder(MemberMoneyChargePayCenterBiz::NAME, $DrwL4['id'], $DrwL4['money'], '钱包充值'); goto wFbai; umFZc: BizException::throwsIf('金额最少为0.01元', $ECp_x < 0.01); goto OKMUb; j1Jn3: BizException::throwsIf('钱包充值未开启', !modstart_config('Member_MoneyChargeEnable', false)); goto ImYEW; OKMUb: BizException::throwsIf('金额最大为1,000,000元', $ECp_x > 1000000); goto Lx3KI; ImYEW: $ErQts = InputPackage::buildFromInput(); goto u0Qp9; wFbai: } }