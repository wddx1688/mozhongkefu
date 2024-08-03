<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Core; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Response; use Module\Member\Util\MemberMoneyUtil; use Module\Member\Util\MemberUtil; use Module\PayCenter\Biz\AbstractPayCenterBiz; use Module\PayCenter\Type\PayType; use Module\Vendor\Provider\Notifier\NotifierProvider; use Module\Vendor\Type\OrderStatus; class MemberMoneyChargePayCenterBiz extends AbstractPayCenterBiz { const NAME = 'mMemberMoneyCharge'; public function name() { return self::NAME; } public function title() { return '用户钱包充值'; } public function disabledPayTypes() { return array(PayType::MEMBER_MONEY); } public function onPayed($luzPt, $fE2Qa, $uZEpM = array()) { goto Wa823; KV1SC: ModelUtil::update('member_money_charge_order', $luzPt, array('status' => OrderStatus::COMPLETED)); goto ln10S; ln10S: MemberMoneyUtil::change($DrwL4['memberUserId'], $DrwL4['money'], '钱包充值'); goto wSAJo; wSAJo: ModelUtil::transactionCommit(); goto Sfffu; ub7mn: $DrwL4 = ModelUtil::getWithLock('member_money_charge_order', $luzPt); goto sxIrI; Sfffu: $CRCLA = MemberUtil::get($DrwL4['memberUserId']); goto HII21; sxIrI: if ($DrwL4['status'] !== OrderStatus::WAIT_PAY) { ModelUtil::transactionCommit(); return; } goto KV1SC; Wa823: ModelUtil::transactionBegin(); goto ub7mn; HII21: NotifierProvider::notify('MemberMoneyCharge', '用户钱包充值成功', array('用户ID' => $CRCLA['id'], '用户昵称' => $CRCLA['nickname'], '用户名' => $CRCLA['username'], '充值金额' => $DrwL4['money'])); goto R2iwC; R2iwC: } public function createOrderForQuick($RQr3R, $uZEpM = array()) { goto NLwwR; ZrJTE: $tJ6XI = $RQr3R['session']['memberUserId']; goto nhiVW; nhiVW: $ECp_x = $RQr3R['param']['money']; goto hGLBy; cR4pw: BizException::throwsIf('充值金额异常', $ECp_x < 0.01 || $ECp_x > 1000 * 10000); goto Sz4_H; wr20B: return Response::generateSuccessData(array('bizId' => $DrwL4['id'], 'feeTotal' => $ECp_x, 'body' => '钱包充值', 'param' => array(), 'redirect' => modstart_web_url('member_money'))); goto VGLRC; NLwwR: BizException::throwsIf('钱包充值未开启', !modstart_config('Member_MoneyChargeEnable', false)); goto ZrJTE; hGLBy: BizException::throwsIfEmpty('用户ID为空', $tJ6XI); goto cR4pw; Sz4_H: $DrwL4 = ModelUtil::insert('member_money_charge_order', array('status' => OrderStatus::WAIT_PAY, 'memberUserId' => $tJ6XI, 'money' => $ECp_x)); goto wr20B; VGLRC: } }