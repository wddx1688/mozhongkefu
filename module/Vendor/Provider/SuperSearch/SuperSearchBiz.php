<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; use Module\Vendor\Provider\BizTrait; class SuperSearchBiz { use BizTrait; public static function all() { return self::listAll(); } public static function get($rfBQu) { return self::getByName($rfBQu); } }