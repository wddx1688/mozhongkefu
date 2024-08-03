<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider\Auth; use Module\Vendor\Provider\ProviderTrait; class MemberAuthProvider { use ProviderTrait; public static function call($UR3Zf, $uZEpM = array()) { goto V9g0Y; V9g0Y: $JS0z_ = MemberAuthProvider::listAll(); goto dFmZx; e2EJJ: return null; goto iuV5c; dFmZx: foreach ($JS0z_ as $yHanX) { goto ddYq2; N_0MG: $FEjaa = call_user_func_array(array($yHanX, $UR3Zf), array($uZEpM)); goto tTtTu; tTtTu: if (null !== $FEjaa) { return $FEjaa; } goto Mp7Eg; ddYq2: if (!$yHanX->enabled()) { continue; } goto N_0MG; Mp7Eg: } goto e2EJJ; iuV5c: } }