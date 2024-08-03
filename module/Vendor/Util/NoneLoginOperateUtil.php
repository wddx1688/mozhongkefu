<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Request; use ModStart\Core\Util\EnvUtil; use ModStart\Core\Util\RandomUtil; use ModStart\Core\Util\SerializeUtil; class NoneLoginOperateUtil { public static function generateUrl($VwfRl, $uZEpM = array(), $knaKv = null) { goto i4hsP; ticrQ: $MBDLy['sign'] = self::sign($VwfRl, $MBDLy['nonce'], $MBDLy['timestamp'], $MBDLy['param']); goto RNY4x; RNY4x: return $knaKv . modstart_web_url($VwfRl, $MBDLy); goto SJM5m; syElw: $MBDLy['nonce'] = RandomUtil::string(10); goto NnxBs; i4hsP: if (null === $knaKv) { $knaKv = Request::domainUrl(); } goto BwdlQ; BwdlQ: $MBDLy = array(); goto eWjNj; eWjNj: $MBDLy['timestamp'] = time(); goto syElw; NnxBs: $MBDLy['param'] = SerializeUtil::jsonEncode($uZEpM); goto ticrQ; SJM5m: } public static function sign($VwfRl, $G2VTB, $e3gVC, $uZEpM) { $V_WOz = EnvUtil::securityKey(); return md5($VwfRl . ':' . $V_WOz . ':' . $G2VTB . ':' . $e3gVC . ':' . $uZEpM); } }