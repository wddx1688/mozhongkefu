<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider\Auth; abstract class AbstractMemberAuthProvider { public abstract function name(); public abstract function title(); public function enabled() { return true; } public function onWebLogin($uZEpM = array()) { return null; } public function onWebLogout($uZEpM = array()) { return null; } }