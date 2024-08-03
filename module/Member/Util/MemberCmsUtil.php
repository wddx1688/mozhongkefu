<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Util; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Dao\ModelUtil; use ModStart\Field\AutoRenderedFieldValue; class MemberCmsUtil { public static function showFromId($tJ6XI, $E9h4W = null) { goto ITfzU; INVm8: $CRCLA = ModelUtil::getWithCache('member_user', array('id' => $tJ6XI)); goto cDgro; ITfzU: if (!$tJ6XI) { return AutoRenderedFieldValue::make('<span class="ub-text-muted">-</span>'); } goto INVm8; cDgro: return self::show($CRCLA, $E9h4W); goto iA5OT; iA5OT: } public static function show($CRCLA, $E9h4W = null) { if (!empty($CRCLA)) { goto L2J5h; zLLqZ: if (!is_array($E9h4W)) { $E9h4W = array($E9h4W); } goto wi3ZO; U_1FP: return AutoRenderedFieldValue::make('<a href="javascript:;" class="ub-icon-text" data-dialog-request="' . action('\\Module\\Member\\Admin\\Controller\\MemberController@show', array('_id' => $CRCLA['id'])) . '">
            <img class="icon" src="' . AssetsUtil::fixOrDefault($CRCLA['avatar'], 'asset/image/avatar.svg') . '" />
            <span class="text">' . htmlspecialchars($me7IX) . '</span></a>'); goto danh1; L2J5h: if (null === $E9h4W) { $E9h4W = array('username'); } goto zLLqZ; wi3ZO: if ($CRCLA['isDeleted']) { $me7IX = '<已删除用户>'; } else { $me7IX = '<未知用户>'; foreach ($E9h4W as $DHPQB) { if (!empty($CRCLA[$DHPQB])) { $me7IX = $CRCLA[$DHPQB]; break; } } } goto U_1FP; danh1: } return AutoRenderedFieldValue::make(''); } }