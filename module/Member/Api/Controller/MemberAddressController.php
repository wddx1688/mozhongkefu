<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Api\Controller; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Core\Util\CRUDUtil; use ModStart\Module\ModuleBaseController; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\Member\Util\MemberAddressUtil; class MemberAddressController extends ModuleBaseController implements MemberLoginCheck { public function all() { return Response::generateSuccessData(MemberAddressUtil::listUserAddresses(MemberUser::id())); } public function getDefault() { return Response::generateSuccessData(MemberAddressUtil::getDefault(MemberUser::id())); } public function edit() { goto olZlt; olZlt: $ErQts = InputPackage::buildFromInput(); goto g07Ke; uEDzU: BizException::throwsIfEmpty('地址为空', $XWlC_['area']); goto cnwdS; i4L0v: if ($XWlC_['isDefault']) { MemberAddressUtil::resetDefault(MemberUser::id()); } goto f_EBo; lA1_O: $XWlC_['area'] = $ErQts->getTrimString('area'); goto Z3kla; SQNki: $XWlC_['phone'] = $ErQts->getTrimString('phone'); goto lA1_O; MMPVP: $XWlC_ = array(); goto D82CF; kvYFz: return Response::generateSuccess(); goto rev89; pwbiB: $XWlC_['isDefault'] = $ErQts->getBoolean('isDefault'); goto gx4lV; Z3kla: $XWlC_['detail'] = $ErQts->getTrimString('detail'); goto pwbiB; f_EBo: if ($cGOPK) { MemberAddressUtil::update($cGOPK['id'], $XWlC_); } else { $XWlC_['memberUserId'] = MemberUser::id(); MemberAddressUtil::insert($XWlC_); } goto kvYFz; V1SHC: BizException::throwsIfEmpty('手机为空', $XWlC_['phone']); goto uEDzU; cnwdS: BizException::throwsIfEmpty('详细地址为空', $XWlC_['detail']); goto i4L0v; g07Ke: $vWdBd = $ErQts->getInteger('id'); goto iUlu3; gx4lV: BizException::throwsIfEmpty('姓名为空', $XWlC_['name']); goto V1SHC; hE1n3: if ($vWdBd) { $cGOPK = MemberAddressUtil::getUserAddress(MemberUser::id(), $vWdBd); BizException::throwsIfEmpty('地址不存在', $cGOPK); } goto MMPVP; D82CF: $XWlC_['name'] = $ErQts->getTrimString('name'); goto SQNki; iUlu3: $cGOPK = null; goto hE1n3; rev89: } public function delete() { goto DUiNQ; x42gH: BizException::throwsIfEmpty('地址不存在', $cGOPK); goto XrLQG; hx7g7: $cGOPK = MemberAddressUtil::getUserAddress(MemberUser::id(), $vWdBd); goto x42gH; XrLQG: MemberAddressUtil::delete($cGOPK['id']); goto Zm3tl; DUiNQ: $ErQts = InputPackage::buildFromInput(); goto j8nXV; Zm3tl: return Response::generateSuccess(); goto NuQDC; j8nXV: $vWdBd = $ErQts->getInteger('id'); goto hx7g7; NuQDC: } }