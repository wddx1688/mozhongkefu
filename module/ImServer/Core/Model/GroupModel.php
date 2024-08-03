<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Model; use ModStart\Core\Dao\ModelUtil; class GroupModel { public static function get($AoMnT) { $hJdTO = ModelUtil::get('im_group', $AoMnT, array('id', 'avatar')); return $hJdTO; } public static function listGroupIds($qzstR) { return ModelUtil::values('im_group_user', 'groupId', array('userId' => $qzstR)); } public static function getUser($AoMnT, $qzstR) { return ModelUtil::get('im_group_user', array('groupId' => $AoMnT, 'userId' => $qzstR)); } }