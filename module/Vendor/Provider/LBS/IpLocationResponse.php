<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LBS; class IpLocationResponse { public static $keys = array('country', 'province', 'city', 'district', 'isp'); public static function fromArray($XWlC_) { goto hRAmo; BuX2y: foreach (self::$keys as $Cc2wA) { $FZUh3->{$Cc2wA} = isset($XWlC_[$Cc2wA]) ? $XWlC_[$Cc2wA] : null; } goto Fs3Di; Fs3Di: return $FZUh3; goto OkUBJ; hRAmo: $FZUh3 = new static(); goto BuX2y; OkUBJ: } public $country; public $province; public $city; public $district; public $isp; }