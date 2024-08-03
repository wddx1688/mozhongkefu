<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class PaginateUtil { public static function pack($nQYo_, $mZ5xK, $qp8x7) { goto Omlc6; NSch3: $nMi2c['pageSize'] = $qp8x7; goto eP2dG; VXmNN: return $nMi2c; goto ax93t; Omlc6: $nMi2c = array(); goto Lqxz8; Lqxz8: $nMi2c['page'] = $mZ5xK; goto NSch3; Utgg2: $aibkj = $qp8x7 * ($mZ5xK - 1); goto GHLaS; GHLaS: if ($aibkj < 0 || $aibkj >= count($nQYo_)) { $nMi2c['records'] = array(); } else { $nMi2c['records'] = array_slice($nQYo_, $aibkj, $qp8x7); } goto VXmNN; eP2dG: $nMi2c['total'] = count($nQYo_); goto Utgg2; ax93t: } public static function pack1($nQYo_) { goto WAJg5; Nvntp: $nMi2c['total'] = count($nQYo_); goto tDt12; LIWcC: $nMi2c['pageSize'] = count($nQYo_); goto Nvntp; WAJg5: $nMi2c = array(); goto usbuN; tDt12: $nMi2c['records'] = $nQYo_; goto wIOGi; usbuN: $nMi2c['page'] = 1; goto LIWcC; wIOGi: return $nMi2c; goto P_S_Y; P_S_Y: } }