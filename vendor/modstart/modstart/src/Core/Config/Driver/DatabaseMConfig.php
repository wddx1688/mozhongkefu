<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Config\Driver; use Illuminate\Support\Facades\Cache; use ModStart\Admin\Model\Config; use ModStart\Core\Config\MConfig; use ModStart\Core\Dao\ModelUtil; class DatabaseMConfig extends MConfig { const CACHE_PREFIX = 'config:'; public function get($cANPj, $bX2xJ = '', $OE2mE = true) { goto F0q2g; Zy1Cd: if ($OE2mE) { $VuXfH = Cache::get($ZuKco); if (null !== $VuXfH) { if (null === $VuXfH || '' === $VuXfH) { return $bX2xJ; } return $VuXfH; } } goto VUoDM; LBxPf: return $bX2xJ; goto lkXPb; VUoDM: if (null === $VuXfH) { $LyfCI = ModelUtil::get('config', array('key' => $cANPj)); if ($LyfCI) { goto bpcC0; jHmss: if (null === $LyfCI['value'] || '' === $LyfCI['value']) { return $bX2xJ; } goto fSPH6; bpcC0: Cache::forever($ZuKco, $LyfCI['value']); goto jHmss; fSPH6: return $LyfCI['value']; goto Mp69h; Mp69h: } else { Cache::forever($ZuKco, $bX2xJ); } } goto LBxPf; F0q2g: if (null === $bX2xJ) { $bX2xJ = ''; } goto RV9g3; RV9g3: $ZuKco = self::CACHE_PREFIX . $cANPj; goto ea0ei; ea0ei: $VuXfH = null; goto Zy1Cd; lkXPb: } public function set($cANPj, $VuXfH) { goto Q2CSH; Q2CSH: $LyfCI = ModelUtil::get('config', array('key' => $cANPj)); goto AV65b; TY4GU: $ZuKco = self::CACHE_PREFIX . $cANPj; goto MHe1r; AV65b: if ($LyfCI) { ModelUtil::update('config', array('id' => $LyfCI['id']), array('value' => $VuXfH)); } else { ModelUtil::insert('config', array('key' => $cANPj, 'value' => $VuXfH)); } goto TY4GU; MHe1r: Cache::forget($ZuKco); goto Lh9P1; Lh9P1: } public function remove($cANPj) { goto nB81t; u_bUu: if ($LyfCI) { ModelUtil::delete('config', array('id' => $LyfCI['id'])); } goto Tdsuj; Tdsuj: $ZuKco = self::CACHE_PREFIX . $cANPj; goto Su4gu; Su4gu: Cache::forget($ZuKco); goto E4Paz; nB81t: $LyfCI = ModelUtil::get('config', array('key' => $cANPj)); goto u_bUu; E4Paz: } public function has($cANPj) { $LyfCI = ModelUtil::get('config', array('key' => $cANPj)); return !!$LyfCI; } public function all($OFAbu = null) { goto gwp6y; Qw8Xb: return $YK4c3; goto Tt7NO; cQH6j: if (null !== $OFAbu) { $IpOIw->where('key', 'like', $OFAbu . '%'); } goto K6IRy; K6IRy: $YK4c3 = $IpOIw->get(array('key', 'value'))->toArray(); goto Qw8Xb; gwp6y: $IpOIw = Config::query(); goto cQH6j; Tt7NO: return array_column($YK4c3, 'value', 'key'); goto XFTME; XFTME: } }