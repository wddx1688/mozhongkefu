<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Input\Response; use ModStart\Core\Util\ArrayUtil; use ModStart\Core\Util\RandomUtil; class UserAuthRepository { public static function generateToken($UegGl, $eOvnN, $qWNT8, $cM3gB) { goto nxWpg; tljzS: return Response::generateSuccessData(array('token' => $qtbsi, 'user' => $t9mtn)); goto QZHfA; nxWpg: $VSP7l = array('biz' => $UegGl, 'bizId' => $eOvnN); goto riPxQ; exnv8: $qtbsi = RandomUtil::string(32); goto pif_5; Uejor: if (!$t9mtn) { $t9mtn = ModelUtil::insert('im_user', array_merge($VSP7l, array('nickname' => $qWNT8, 'avatar' => $cM3gB))); } goto exnv8; pif_5: RedisRepository::setex("Auth:{$qtbsi}", $t9mtn['id'], 3600 * 24); goto tljzS; riPxQ: $t9mtn = ModelUtil::get('im_user', $VSP7l); goto Uejor; QZHfA: } public static function getUserByToken($qtbsi) { goto d2Brr; HO7H8: if (null == $qzstR) { return null; } goto Dv3Ea; lhSXY: return ArrayUtil::keepKeys($t9mtn, array('id', 'biz', 'bizId', 'nickname', 'avatar')); goto mCgbT; Dv3Ea: $t9mtn = ModelUtil::get('im_user', $qzstR); goto lhSXY; d2Brr: if (empty($qtbsi)) { return null; } goto U9Jnk; U9Jnk: $qzstR = RedisRepository::getInteger('Auth:' . $qtbsi); goto HO7H8; mCgbT: } }