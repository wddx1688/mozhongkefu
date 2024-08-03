<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\RandomImage; class RandomImageProvider { public static function get() { goto M7cu6; M7cu6: static $X0c2E = null; goto VUpv6; BSxB2: return $X0c2E; goto RcJmt; VUpv6: if (null === $X0c2E) { goto siy3Y; siy3Y: $HcvYd = config('RandomImageProvider'); goto y_29h; ktXkq: $X0c2E = app($HcvYd); goto myPoB; y_29h: if (empty($HcvYd)) { $HcvYd = DefaultRandomImageProvider::class; } goto ktXkq; myPoB: } goto BSxB2; RcJmt: } public static function getImage($UegGl = '', $uZEpM = array()) { return self::get()->get(array_merge(array('biz' => $UegGl), $uZEpM)); } }