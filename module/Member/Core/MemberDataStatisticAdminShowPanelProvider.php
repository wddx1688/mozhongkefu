<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Core; use ModStart\Core\Util\FileUtil; use ModStart\Form\Form; use Module\Member\Provider\MemberAdminShowPanel\AbstractMemberAdminShowPanelProvider; use Module\Member\Util\MemberDataStatisticUtil; class MemberDataStatisticAdminShowPanelProvider extends AbstractMemberAdminShowPanelProvider { const NAME = 'MemberDataStatistic'; public function name() { return self::NAME; } public function title() { return '存储'; } public function render($CRCLA, $uZEpM = array()) { goto igmv2; ryHjm: $yAhCR->hidden('memberUserId', '用户ID')->addable(true); goto HAUHT; R2RGf: return $yAhCR->render(); goto ieBUG; HAUHT: $AVLNU = array(); goto wsQpo; skC3T: $yAhCR->formUrl(modstart_admin_url('member/config/data_statistic')); goto R2RGf; wsQpo: $AVLNU['memberUserId'] = $CRCLA['id']; goto HthlA; hdL7k: $yAhCR->item($AVLNU)->fillFields(); goto MEMyJ; HthlA: $AVLNU['sizeLimit'] = $He0J8['sizeLimit']; goto V6UEc; igmv2: $He0J8 = MemberDataStatisticUtil::getCreateMemberUser($CRCLA['id']); goto HLQV0; UKAMk: $yAhCR->number('sizeLimit', '大小限制')->help('单位MB'); goto JDVhY; HLQV0: $yAhCR = Form::make(''); goto UKAMk; MEMyJ: $yAhCR->showReset(false); goto skC3T; V6UEc: $AVLNU['sizeUsed'] = FileUtil::formatByte($He0J8['sizeUsed']); goto hdL7k; JDVhY: $yAhCR->display('sizeUsed', '已使用大小')->addable(true); goto ryHjm; ieBUG: } }