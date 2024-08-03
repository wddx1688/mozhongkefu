<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Traits; use Illuminate\Support\Facades\Session; use Illuminate\Support\Facades\View; use ModStart\Core\Input\Request; trait SecurityTrait { private function checkSecuritySecondVerify() { goto m7hCT; QfCML: $A6vjL = intval(Session::get('Vendor_SecuritySecondVerifyTime')); goto iZUg9; OMPHB: if (!$dF8tP) { return; } goto QfCML; m7hCT: $dF8tP = modstart_config('Vendor_SecuritySecondVerifyPassword'); goto OMPHB; yKWV1: Session::set('Vendor_SecuritySecondVerifyTime', time() + 3600); goto reVRU; iZUg9: if ($A6vjL < time()) { header('Location: ' . modstart_admin_url('security/second_verify', array('redirect' => Request::currentPageUrl(), '_is_tab' => View::shared('_isTabQuery')))); die; } goto yKWV1; reVRU: } }