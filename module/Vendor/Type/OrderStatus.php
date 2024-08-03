<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Type; use ModStart\Core\Type\BaseType; class OrderStatus implements BaseType { const WAIT_PAY = 1; const WAIT_SHIPPING = 2; const WAIT_CONFIRM = 3; const COMPLETED = 50; const CANCEL_PAID = 97; const CANCEL_EXPIRED = 98; const CANCEL = 99; public static function getList() { return array(self::WAIT_PAY => '待付款', self::WAIT_SHIPPING => '待发货', self::WAIT_CONFIRM => '待收货', self::COMPLETED => '已完成', self::CANCEL_PAID => '支付成功取消', self::CANCEL_EXPIRED => '订单过期取消', self::CANCEL => '订单取消'); } public static function filterList($YZXT9) { goto tasrY; Vsxp4: foreach (self::getList() as $U8G_W => $gghxW) { if (!in_array($U8G_W, $YZXT9)) { continue; } $DivNd[$U8G_W] = $gghxW; } goto POaTd; POaTd: return $DivNd; goto uxZSi; tasrY: $DivNd = array(); goto Vsxp4; uxZSi: } public static function simple() { return self::filterList(array(self::WAIT_PAY, self::COMPLETED, self::CANCEL_PAID, self::CANCEL_EXPIRED, self::CANCEL)); } }