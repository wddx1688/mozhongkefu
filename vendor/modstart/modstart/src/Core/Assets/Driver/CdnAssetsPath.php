<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Assets\Driver; use ModStart\Core\Assets\AssetsPath; use Illuminate\Support\Facades\Cache; class CdnAssetsPath implements AssetsPath { const CACHE_PREFIX = 'modstart:asset-file:'; public function getPathWithHash($Z3orD) { goto TQwb_; TWZrc: if (null !== $mSCVj) { return $Z3orD . '?' . $mSCVj; } goto rPtdd; Jj8DX: return $Z3orD; goto oVaQG; TQwb_: $mSCVj = Cache::get($HE8Kt = self::CACHE_PREFIX . $Z3orD, null); goto TWZrc; rPtdd: if (file_exists($Z3orD)) { goto VtIoQ; PTwMe: Cache::put($HE8Kt, $mSCVj, 0); goto IfnWN; VtIoQ: $mSCVj = '' . crc32(md5_file($Z3orD)); goto PTwMe; IfnWN: return $Z3orD . '?' . $mSCVj; goto kT_d9; kT_d9: } goto PWMh6; PWMh6: Cache::put($HE8Kt, '', 0); goto Jj8DX; oVaQG: } public function getCDN($Z3orD) { goto RWC3p; RWC3p: $y3GE9 = config('modstart.asset.cdn_array', array('/')); goto mNcSR; mNcSR: $GbIpK = abs(crc32($Z3orD) % count($y3GE9)); goto nXVE4; nXVE4: return $y3GE9[$GbIpK]; goto Npjx8; Npjx8: } }