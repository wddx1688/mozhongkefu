<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Core\Repository; use Module\ImServer\Core\Model\UserModel; class UserRepository { public static function get($UegGl, $eOvnN) { return UserModel::getBiz($UegGl, $eOvnN); } }