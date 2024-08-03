<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Session; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; class UtilController extends Controller { public function frame() { goto A2uso; A2uso: $gY_Ck = InputPackage::buildFromInput(); goto ulerM; ulerM: Session::put('_adminFrameLeftToggle', $gY_Ck->getBoolean('frameLeftToggle')); goto LNW69; LNW69: return Response::jsonSuccess(); goto fm7_Y; fm7_Y: } public function switchLang() { goto JLh0B; zq1Nt: L_locale($gubO3); goto u4H9L; z5gLS: $vqlrZ = $gY_Ck->getTrimString('redirect', modstart_admin_url('')); goto WwqPB; JLh0B: $gY_Ck = InputPackage::buildFromInput(); goto z5gLS; WwqPB: $gubO3 = $gY_Ck->getTrimString('lang'); goto zq1Nt; u4H9L: return Response::redirect($vqlrZ); goto Hrfpd; Hrfpd: } }