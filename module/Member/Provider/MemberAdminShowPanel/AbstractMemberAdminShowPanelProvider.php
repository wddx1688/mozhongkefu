<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider\MemberAdminShowPanel; use Illuminate\Support\Facades\View; abstract class AbstractMemberAdminShowPanelProvider { public abstract function name(); public abstract function title(); public function renderView() { return null; } public function render($CRCLA, $uZEpM = array()) { goto aZNzu; u2Jl3: return View::make($tURZC, array('memberUser' => $CRCLA, 'param' => $uZEpM))->render(); goto stPPe; HKmk3: if (empty($tURZC)) { return null; } goto u2Jl3; aZNzu: $tURZC = $this->renderView(); goto HKmk3; stPPe: } }