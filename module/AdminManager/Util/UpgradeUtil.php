<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Util; use App\Constant\AppConstant; use Chumper\Zipper\Zipper; use Illuminate\Support\Facades\Artisan; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Response; use ModStart\Core\Util\CurlUtil; use ModStart\Core\Util\FileUtil; use ModStart\ModStart; class UpgradeUtil { const REMOTE_BASE = 'https://modstart.com'; private static function baseRequest($ZFzMa, $XWlC_ = array(), $qtbsi = null) { return CurlUtil::postJSONBody(self::REMOTE_BASE . $ZFzMa, $XWlC_, array('header' => array('api-token' => $qtbsi, 'X-Requested-With' => 'XMLHttpRequest'))); } public static function latest() { goto TbjuX; TbjuX: $FZUh3 = self::baseRequest('/api/app/latest', array('app' => AppConstant::APP, 'version' => AppConstant::VERSION)); goto TqjSF; TqjSF: BizException::throwsIfResponseError($FZUh3); goto dj9aR; dj9aR: return $FZUh3['data']; goto sr0m3; sr0m3: } public static function downloadPackage($qtbsi, $ePJyE, $bJlos, $n0I6W) { goto xOuCb; WHomw: BizException::throwsIfEmpty('安装包获取失败', $XWlC_); goto xvdaJ; WuWYt: $WJlDi = $FZUh3['data']['package']; goto EwKjn; yL9zH: BizException::throwsIf('文件MD5校验失败', md5_file($xJIso) != $Vm_EI); goto qGUrk; g1F6E: file_put_contents($svc7f, $Ou4Th); goto NDC_8; qGUrk: $svc7f = FileUtil::generateLocalTempPath('json'); goto g1F6E; hCeNs: file_put_contents($xJIso, $XWlC_); goto yL9zH; Fr0hw: $XWlC_ = CurlUtil::getRaw($WJlDi); goto WHomw; EwKjn: $Vm_EI = $FZUh3['data']['packageMd5']; goto VsMxV; PcuQV: BizException::throwsIfResponseError($FZUh3); goto WuWYt; xvdaJ: $xJIso = FileUtil::generateLocalTempPath('zip'); goto hCeNs; NDC_8: return Response::generateSuccessData(array('diffContentFile' => $svc7f, 'package' => $xJIso, 'packageSize' => filesize($xJIso))); goto tupvZ; VsMxV: $Ou4Th = $FZUh3['data']['diffContent']; goto Fr0hw; xOuCb: $FZUh3 = self::baseRequest('/api/app/download_package', array('app' => $ePJyE, 'fromVersion' => $bJlos, 'toVersion' => $n0I6W), $qtbsi); goto PcuQV; tupvZ: } public static function upgradePackage($WJlDi, $svc7f) { goto v3PWE; q6qgv: return Response::generateSuccessData(array('logs' => $KB0mn)); goto Kzg77; D6F3s: $KB0mn = array(); goto jkm2j; IjIOP: BizException::throwsIf('diffContent为空', empty($Ou4Th)); goto zdrAH; DE2B_: BizException::throwsIf('diffContentFile不存在', !file_exists($svc7f)); goto if3cx; e07sb: $c8yQj->make($WJlDi); goto D6F3s; gWsCb: FileUtil::safeCleanLocalTemp($svc7f); goto q6qgv; jkm2j: if (!empty($Ou4Th['add'])) { goto w27NR; w27NR: $KB0mn[] = '新增文件：'; goto SXWla; aMvx3: $KB0mn[] = ''; goto ft2TI; SXWla: foreach ($Ou4Th['add'] as $n8fWJ) { goto NFMQy; NFMQy: $n3GvS = $c8yQj->getFileContent($n8fWJ); goto Plz6a; Plz6a: FileUtil::write(base_path($n8fWJ), $n3GvS); goto fJL5Y; fJL5Y: $KB0mn[] = "> {$n8fWJ}"; goto l62Dw; l62Dw: } goto aMvx3; ft2TI: } goto obh2x; EPLaS: if (!empty($Ou4Th['delete'])) { goto urRSh; urRSh: $KB0mn[] = '删除文件：'; goto UIaU8; n08qL: $KB0mn[] = ''; goto idgq8; UIaU8: foreach ($Ou4Th['delete'] as $n8fWJ) { if (file_exists($DHPQB = base_path($n8fWJ))) { @unlink($DHPQB); $KB0mn[] = "> {$n8fWJ}"; } } goto n08qL; idgq8: } goto xDrM1; if3cx: $Ou4Th = @json_decode(file_get_contents($svc7f), true); goto IjIOP; obh2x: if (!empty($Ou4Th['update'])) { goto QSf5l; sS6jS: $KB0mn[] = ''; goto mXoI9; QSf5l: $KB0mn[] = '修改文件：'; goto JWwcG; JWwcG: foreach ($Ou4Th['update'] as $n8fWJ) { goto OSrbP; OSrbP: $n3GvS = $c8yQj->getFileContent($n8fWJ); goto XsFss; XsFss: FileUtil::write(base_path($n8fWJ), $n3GvS); goto RuuQW; RuuQW: $KB0mn[] = "> {$n8fWJ}"; goto HSTMS; HSTMS: } goto sS6jS; mXoI9: } goto EPLaS; oN5nm: $sZrkl = Artisan::call('modstart:module-install-all'); goto DsH15; CfWuR: BizException::throwsIf('调用 php artisan migrate 失败', 0 != $sZrkl); goto oN5nm; FY0Bi: if (!empty($Ou4Th['add'])) { $x60Fi = array_merge($x60Fi, $Ou4Th['add']); } goto JhznL; QU5gA: BizException::throwsIfResponseError($FZUh3); goto carN7; xDrM1: $c8yQj->close(); goto EnLSs; v3PWE: BizException::throwsIf('package不存在', !file_exists($WJlDi)); goto DE2B_; EnLSs: ModStart::clearCache(); goto InqjX; InqjX: try { $sZrkl = Artisan::call('migrate'); } catch (\Exception $VPhVw) { $sZrkl = -1; } goto CfWuR; DsH15: BizException::throwsIf('调用 php artisan modstart:module-install-all 失败', 0 != $sZrkl); goto uqmX8; Kk6oz: $FZUh3 = FileUtil::filePathWritableCheck($x60Fi); goto QU5gA; JhznL: if (!empty($Ou4Th['update'])) { $x60Fi = array_merge($x60Fi, $Ou4Th['update']); } goto Kk6oz; carN7: $c8yQj = new Zipper(); goto e07sb; uqmX8: FileUtil::safeCleanLocalTemp($WJlDi); goto gWsCb; zdrAH: $x60Fi = array(); goto FY0Bi; Kzg77: } }