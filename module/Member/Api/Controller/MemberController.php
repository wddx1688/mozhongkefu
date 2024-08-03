<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Api\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\Response; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\MemberCert\Util\MemberCertUtil; class MemberController extends Controller implements MemberLoginCheck { public function current() { goto COxKk; WfNXa: return Response::generateSuccessData($XWlC_); goto YOQBX; QdZH8: $XWlC_['_certType'] = null; goto stCSZ; stCSZ: if (modstart_module_enabled('MemberCert')) { $XWlC_['_certType'] = MemberCertUtil::getCertType(MemberUser::id()); } goto WfNXa; COxKk: $XWlC_ = array(); goto QdZH8; YOQBX: } }