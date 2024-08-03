<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace App\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Core\Util\ArrayUtil; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\Member\Util\MemberUtil; class MemberProfileController extends Controller implements MemberLoginCheck { public function basic($wdfwa = null) { goto nboHV; nboHV: $rENfu = InputPackage::buildFromInput(); goto q2Ksa; q2Ksa: if (null === $wdfwa) { $wdfwa = $rENfu->all(); } goto isYGw; isYGw: MemberUtil::update(MemberUser::id(), ArrayUtil::keepKeys($wdfwa, array('gender', 'realname', 'signature'))); goto Qo61t; Qo61t: return Response::jsonSuccess('保存成功'); goto llILM; llILM: } }