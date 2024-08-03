<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\LBS; class AddressParseResponse { public static $keys = array('idNumber', 'phone', 'postcode', 'name', 'province', 'city', 'district', 'detail'); public static function fromArray($XWlC_) { goto InG8f; gIy6g: foreach (self::$keys as $Cc2wA) { $FZUh3->{$Cc2wA} = isset($XWlC_[$Cc2wA]) ? $XWlC_[$Cc2wA] : null; } goto ogJWt; InG8f: $FZUh3 = new static(); goto gIy6g; ogJWt: return $FZUh3; goto YIEVw; YIEVw: } public $idNumber; public $phone; public $postcode; public $name; public $province; public $city; public $district; public $detail; }