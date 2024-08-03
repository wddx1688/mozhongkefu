<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data; use Illuminate\Support\Str; use ModStart\Core\Assets\AssetsUtil; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Response; use ModStart\Core\Util\EnvUtil; use ModStart\Core\Util\FileUtil; use ModStart\Core\Util\SerializeUtil; use ModStart\Data\Event\DataDeletedEvent; use ModStart\Data\Event\DataFileUploadedEvent; use ModStart\Data\Storage\FileDataStorage; class DataManager { private static $storages = array(); private static $config = null; public static function uploadConfig($gAXRi) { goto jxOVR; e4W5P: $cixWd = array(); goto DVq7a; Sj4hq: return array('chunkSize' => EnvUtil::env('uploadMaxSize'), 'category' => $cixWd); goto X1l6B; jxOVR: if (!is_array($gAXRi)) { $gAXRi = array($gAXRi); } goto e4W5P; DVq7a: foreach ($gAXRi as $bvM2E) { $cixWd[$bvM2E] = config('data.upload.' . $bvM2E); } goto Sj4hq; X1l6B: } public static function getConfigOption() { goto CBw5P; bE8b4: if (null === $mH3Yd) { goto b0hhQ; b0hhQ: $mH3Yd['driver'] = modstart_config('DataStorageDefaultDriver', ''); goto T7cn2; T7cn2: if (empty($mH3Yd['driver'])) { $mH3Yd['driver'] = app()->config->get('DataStorageDriver'); } goto z7FTn; z7FTn: if (empty($mH3Yd['driver'])) { $mH3Yd['driver'] = 'DataStorage_DataFile'; app()->bind('DataStorage_DataFile', function () { return new FileDataStorage(null); }); } goto H4MMB; H4MMB: } goto j0Vz2; j0Vz2: return $mH3Yd; goto nxSxQ; CBw5P: static $mH3Yd = null; goto bE8b4; nxSxQ: } private static function prepareOption($mH3Yd = null) { goto f6IaH; f6IaH: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto Z7nQ3; gZqKQ: $bx4aO[$mH3Yd['driver']] = app($mH3Yd['driver']); goto I4uRN; Z7nQ3: if (null === self::$config) { self::$config = config('data.upload', array()); } goto cGRK_; I4uRN: self::$storages[$mSCVj] = $bx4aO[$mH3Yd['driver']]; goto JeKZw; JeKZw: return $mH3Yd; goto YTrol; cGRK_: $mSCVj = md5(SerializeUtil::jsonEncode($mH3Yd)); goto LSxGH; LSxGH: if (isset(self::$storages[$mSCVj])) { return $mH3Yd; } goto gZqKQ; YTrol: } public static function storage($mH3Yd = null) { goto MME45; MME45: if (null === $mH3Yd) { $mH3Yd = self::prepareOption(); } goto wjABQ; Gc412: BizException::throwsIf('Storage empty', !isset(self::$storages[$mSCVj])); goto ZMfAC; wjABQ: $mSCVj = md5(SerializeUtil::jsonEncode($mH3Yd)); goto Gc412; ZMfAC: return self::$storages[$mSCVj]; goto cFvWc; cFvWc: } public static function uploadHandle($gAXRi, $gY_Ck, $LGQQv = array(), $mH3Yd = null) { goto KvKye; Z8XEv: return $JDFqy->multiPartUpload(array('category' => $gAXRi, 'file' => $Z3orD, 'input' => $gY_Ck)); goto Noq00; o59uG: $Z3orD = array_merge($Z3orD, $LGQQv); goto Nsaas; TMMc2: $JDFqy = self::storage($mH3Yd); goto ilGW7; Nsaas: if (empty(self::$config[$gAXRi])) { return Response::generate(-2, 'Unknown category : ' . $gAXRi); } goto xv6di; KvKye: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto G3wmI; mtO31: $tvaX_ = FileUtil::extension($Z3orD['name']); goto SBGMu; cjh9d: $Z3orD = array(); goto b3r19; ilGW7: $CDUjL = empty($gY_Ck['action']) ? '' : $gY_Ck['action']; goto cjh9d; G3wmI: $mH3Yd = self::prepareOption($mH3Yd); goto TMMc2; Z0BMy: if (strlen($Z3orD['name']) > $JDFqy->repository()->maxFilenameByte()) { return Response::generate(-3, 'Filename too long ( max 200 bytes )'); } goto mtO31; xv6di: $LyfCI = self::$config[$gAXRi]; goto Z0BMy; p6aJR: if (!empty($gY_Ck['md5'])) { $Z3orD['md5'] = $gY_Ck['md5']; } goto o59uG; HMUl1: if ($Z3orD['size'] > $LyfCI['maxSize']) { return Response::generate(-5, L('File Size Limit %s', FileUtil::formatByte($LyfCI['maxSize']))); } goto ChMCM; ChMCM: if ('init' == $CDUjL) { return $JDFqy->multiPartInit(array('category' => $gAXRi, 'file' => $Z3orD)); } goto Z8XEv; b3r19: foreach (array('name', 'type', 'lastModifiedDate', 'size') as $dKmL2) { if (empty($gY_Ck[$dKmL2])) { return Response::generate(-1, $dKmL2 . ' empty'); } $Z3orD[$dKmL2] = $gY_Ck[$dKmL2] . ''; } goto p6aJR; SBGMu: if (!in_array($tvaX_, $LyfCI['extensions'])) { return Response::generate(-4, L('File extension %s not permit', $tvaX_)); } goto HMUl1; Noq00: } public static function uploadToTemp($gAXRi, $owyBa, $N19iJ, $mH3Yd = null, $kKcR8 = array()) { goto EGpFB; B2UeA: $JDFqy = self::storage($mH3Yd); goto NqmhG; BieHu: if (!isset($kKcR8['eventOpt'])) { $kKcR8['eventOpt'] = array(); } goto yZz6P; pf8Hy: $JDFqy->put($YBGO0, $N19iJ); goto b54qW; hiDyC: $YBGO0 = $hCl98; goto kN5UK; UUFcU: if (empty($owyBa)) { return Response::generate(-2, 'Filename empty'); } goto yBYNN; xXRTO: $LyfCI = self::$config[$gAXRi]; goto UUFcU; uzn8c: return Response::generateSuccessData(array('dataTemp' => $SEkL2, 'path' => $hCl98, 'fullPath' => $YBGO0)); goto inHSD; kN5UK: if (!empty($mH3Yd['domain'])) { $YBGO0 = $mH3Yd['domain'] . $hCl98; } goto uzn8c; yZz6P: $mH3Yd = self::prepareOption($mH3Yd); goto B2UeA; P6G0e: $lrbMf = time(); goto s2hM0; GJ0a8: if ($j7D2N > $LyfCI['maxSize']) { return Response::generate(-5, L('File Size Limit %s', FileUtil::formatByte($LyfCI['maxSize']))); } goto P6G0e; JBaNh: $tvaX_ = FileUtil::extension($owyBa); goto pryo3; sZSJu: $SEkL2 = $JDFqy->repository()->addTemp($gAXRi, $hCl98, $owyBa, $j7D2N); goto qpwJT; PafG0: do { $hCl98 = strtolower(Str::random(32)) . '.' . $tvaX_; $YBGO0 = AbstractDataStorage::DATA_TEMP . '/' . $gAXRi . '/' . $hCl98; } while ($vxW3I++ < 10 && $JDFqy->has($YBGO0)); goto WEUIu; EGpFB: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto BieHu; pryo3: if (!in_array($tvaX_, $LyfCI['extensions'])) { return Response::generate(-4, L('File extension %s not permit', $tvaX_)); } goto hZfh0; hZfh0: $j7D2N = strlen($N19iJ); goto MPN2V; MPN2V: if ($j7D2N == 0) { return Response::generate(-5, 'File content empty'); } goto GJ0a8; s2hM0: $vxW3I = 0; goto PafG0; b54qW: DataFileUploadedEvent::fire($JDFqy->driverName(), $gAXRi, $YBGO0, $kKcR8['eventOpt']); goto sZSJu; yBYNN: if (strlen($owyBa) > $JDFqy->repository()->maxFilenameByte()) { return Response::generate(-3, 'Filename too long ( max 200 bytes )'); } goto JBaNh; WEUIu: if ($vxW3I >= 10) { return Response::generate(-7, 'Upload fail'); } goto pf8Hy; qpwJT: $hCl98 = config('data.baseUrl', '/') . AbstractDataStorage::DATA_TEMP . '/' . $SEkL2['category'] . '/' . $SEkL2['path']; goto hiDyC; NqmhG: if (empty(self::$config[$gAXRi])) { return Response::generate(-1, 'Unknown category : ' . $gAXRi); } goto xXRTO; inHSD: } public static function upload($gAXRi, $owyBa, $N19iJ, $mH3Yd = null, $kKcR8 = array()) { goto UR0af; EJJ_j: $hCl98 = config('data.baseUrl', '/') . AbstractDataStorage::DATA . '/' . $nx179['category'] . '/' . $nx179['path']; goto AA0op; pefEa: do { $hCl98 = date('Y/m/d/', $lrbMf) . time() % 86400 . '_' . strtolower(Str::random(4)) . '_' . mt_rand(1000, 9999) . '.' . $tvaX_; $YBGO0 = AbstractDataStorage::DATA . '/' . $gAXRi . '/' . $hCl98; } while ($vxW3I++ < 10 && $JDFqy->has($YBGO0)); goto KL91O; IY2P6: $LyfCI = self::$config[$gAXRi]; goto MDe2Q; Ml58I: $mH3Yd = self::prepareOption($mH3Yd); goto Uvn8c; VejPe: return Response::generateSuccessData(array('data' => $nx179, 'path' => $hCl98, 'fullPath' => $YBGO0)); goto aQaBG; m2WwR: $nx179 = $JDFqy->repository()->addData($gAXRi, $hCl98, $owyBa, $j7D2N, $DqYLg); goto Ei6u9; Ei6u9: $nx179 = $JDFqy->updateDriverDomain($nx179); goto EJJ_j; HZRZd: $j7D2N = strlen($N19iJ); goto dYkjn; KL91O: if ($vxW3I >= 10) { return Response::generate(-7, 'Upload fail'); } goto GuYna; bLDNk: if (!empty($nx179['domain'])) { $YBGO0 = $nx179['domain'] . $hCl98; } else { $YBGO0 = self::fixFull($YBGO0); } goto VejPe; GuYna: $JDFqy->put($YBGO0, $N19iJ); goto sX5NG; VoxLe: if (strlen($owyBa) > $JDFqy->repository()->maxFilenameByte()) { return Response::generate(-3, 'Filename too long ( max 200 bytes )'); } goto q9em4; sX5NG: DataFileUploadedEvent::fire($JDFqy->driverName(), $gAXRi, $YBGO0, $kKcR8['eventOpt']); goto hQ4VN; Uvn8c: $JDFqy = self::storage($mH3Yd); goto SKWnV; wTPW8: $vxW3I = 0; goto pefEa; AA0op: $YBGO0 = $hCl98; goto bLDNk; COw0v: if (!in_array($tvaX_, $LyfCI['extensions'])) { return Response::generate(-4, L('File extension %s not permit', $tvaX_)); } goto HZRZd; hQ4VN: $DqYLg = md5($N19iJ); goto m2WwR; TlZb7: if ($j7D2N > $LyfCI['maxSize']) { return Response::generate(-5, L('File Size Limit %s', FileUtil::formatByte($LyfCI['maxSize']))); } goto A87Js; UR0af: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto ocx3D; SKWnV: if (empty(self::$config[$gAXRi])) { return Response::generate(-1, 'Unknown category : ' . $gAXRi); } goto IY2P6; q9em4: $tvaX_ = FileUtil::extension($owyBa); goto COw0v; A87Js: $lrbMf = time(); goto wTPW8; dYkjn: if ($j7D2N == 0) { return Response::generate(-5, 'File content empty'); } goto TlZb7; ocx3D: if (!isset($kKcR8['eventOpt'])) { $kKcR8['eventOpt'] = array(); } goto Ml58I; MDe2Q: if (empty($owyBa)) { return Response::generate(-2, 'Filename empty'); } goto VoxLe; aQaBG: } public static function storeTempDataByPath($fpkGO, $mH3Yd = null) { goto r2iw9; GJt75: $fpkGO = trim($fpkGO, '/'); goto Bxzz4; uPC9p: $mH3Yd = self::prepareOption($mH3Yd); goto GJt75; Bxzz4: if (preg_match(AbstractDataStorage::PATTERN_DATA_TEMP, $fpkGO, $jRzIK)) { return self::storeTempData($jRzIK[1], $jRzIK[2], $mH3Yd); } goto T_4OV; T_4OV: return Response::generate(-1, 'TempPath Invalid', null); goto TqmTG; r2iw9: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto uPC9p; TqmTG: } public static function storeTempData($gAXRi, $rNfgc, $mH3Yd = null) { goto r6XPs; wlcIN: if (!empty($nx179['domain'])) { $YBGO0 = $nx179['domain'] . $hCl98; } else { $YBGO0 = self::fixFull($YBGO0); } goto e8iwp; YUku_: $JDFqy->repository()->deleteTempById($SEkL2['id']); goto od8tl; aVhdu: $nx179 = $JDFqy->repository()->addData($SEkL2['category'], $hCl98, $SEkL2['filename'], $SEkL2['size'], $SEkL2['md5']); goto hx9xL; e8iwp: return Response::generate(0, 'ok', array('data' => $nx179, 'path' => $hCl98, 'fullPath' => $YBGO0)); goto QJGRN; t6tYK: $hCl98 = date('Y/m/d/', $lrbMf) . time() % 86400 . '_' . strtolower(Str::random(4)) . '_' . mt_rand(1000, 9999) . '.' . $tvaX_; goto tGi2j; r6XPs: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto BTNjm; uHgpw: $JDFqy->move($XfNw_, $oTyWU); goto aVhdu; npdCO: if (!$JDFqy->has($XfNw_)) { $JDFqy->repository()->deleteTempById($SEkL2['id']); return Response::generate(-3, L('TempPath Not Exists, Please Upload Again')); } goto uHgpw; pGc9q: $SEkL2 = $JDFqy->repository()->getTemp($gAXRi, $rNfgc); goto wwyYK; hx9xL: $nx179 = $JDFqy->updateDriverDomain($nx179); goto YUku_; BTNjm: $mH3Yd = self::prepareOption($mH3Yd); goto bk0Un; GrJj3: $XfNw_ = AbstractDataStorage::DATA_TEMP . '/' . $SEkL2['category'] . '/' . $SEkL2['path']; goto sogeM; tGi2j: $YBGO0 = AbstractDataStorage::DATA . '/' . $gAXRi . '/' . $hCl98; goto GrJj3; wwyYK: if (empty($SEkL2)) { return Response::generate(-1, L('TempPath Not Exists, Please Upload Again')); } goto bqw8O; FAZ3I: $lrbMf = time(); goto t6tYK; bqw8O: $tvaX_ = FileUtil::extension($SEkL2['filename']); goto FAZ3I; bk0Un: $JDFqy = self::storage($mH3Yd); goto pGc9q; N8oj_: $YBGO0 = $hCl98; goto wlcIN; sogeM: $oTyWU = AbstractDataStorage::DATA . '/' . $SEkL2['category'] . '/' . $hCl98; goto npdCO; od8tl: $hCl98 = config('data.baseUrl', '/') . AbstractDataStorage::DATA . '/' . $nx179['category'] . '/' . $nx179['path']; goto N8oj_; QJGRN: } public static function deleteById($CeOJi, $mH3Yd = null) { goto UJ6hN; HUN_R: DataDeletedEvent::fire($nx179); goto uswKS; uWUJH: if (empty($nx179)) { return; } goto r_FqC; r_FqC: $Z3orD = AbstractDataStorage::DATA . '/' . $nx179['category'] . '/' . $nx179['path']; goto lYtZU; UJ6hN: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto wKH10; Zh3h0: $nx179 = $JDFqy->repository()->getDataById($CeOJi); goto uWUJH; lYtZU: if ($JDFqy->has($Z3orD)) { $JDFqy->softDelete($Z3orD); } goto B75Ix; wKH10: $mH3Yd = self::prepareOption($mH3Yd); goto yUqWO; B75Ix: $JDFqy->repository()->deleteDataById($CeOJi); goto HUN_R; yUqWO: $JDFqy = self::storage($mH3Yd); goto Zh3h0; uswKS: } public static function deleteByPath($hCl98, $mH3Yd = null) { goto Zhyvo; t0taX: $JDFqy = self::storage($mH3Yd); goto Nve44; oXGK9: DataDeletedEvent::fire($nx179); goto VGI4i; iJEX5: if (empty($nx179)) { return; } goto CgzKL; AiqCt: $JDFqy->repository()->deleteDataById($nx179['id']); goto oXGK9; YovEX: $mH3Yd = self::prepareOption($mH3Yd); goto t0taX; dptr6: if ($JDFqy->has($Z3orD)) { $JDFqy->softDelete($Z3orD); } goto AiqCt; CgzKL: $Z3orD = AbstractDataStorage::DATA . '/' . $nx179['category'] . '/' . $nx179['path']; goto dptr6; Zhyvo: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto YovEX; Nve44: $nx179 = $JDFqy->repository()->getDataByPath($hCl98); goto iJEX5; VGI4i: } public static function deleteDataTempByPath($FHmt9, $mH3Yd = null) { goto jgR91; MMu0C: $mH3Yd = self::prepareOption($mH3Yd); goto NxGDc; tImTR: try { $JDFqy->delete($FHmt9); } catch (\Exception $l8i0J) { goto xNr5r; jDf3B: $WHe6u = array('File not found at path'); goto tspsU; tspsU: $oZkmx = false; goto cKKKT; cKKKT: foreach ($WHe6u as $ARzDD) { if (strstr($BDbmq, $ARzDD)) { $oZkmx = true; break; } } goto CbeRj; xNr5r: $BDbmq = $l8i0J->getMessage(); goto jDf3B; CbeRj: if (!$oZkmx) { throw $l8i0J; } goto vQpM2; vQpM2: } goto Qlwlr; YBYWi: if (empty($SEkL2)) { return; } goto tImTR; Qlwlr: $JDFqy->repository()->deleteTempById($SEkL2['id']); goto SjbsC; jgR91: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto MMu0C; jZjm8: $SEkL2 = $JDFqy->repository()->getTempByPath($FHmt9); goto YBYWi; NxGDc: $JDFqy = self::storage($mH3Yd); goto jZjm8; SjbsC: } public static function parseDataUrl($ikc2A) { if (preg_match(AbstractDataStorage::PATTERN_DATA_STRING, $ikc2A, $jRzIK)) { return Response::generateSuccessData(array('url' => $jRzIK[0], 'category' => $jRzIK[1], 'path' => $jRzIK[2])); } return Response::generateError('parse error'); } public static function preparePathForLocal($hCl98, $mH3Yd = null) { goto WU19U; b0La5: return Response::generate(0, null, array('path' => $MVwEp, 'baseUrl' => ltrim(str_replace('\\', '/', substr($MVwEp, strlen($ePQb3))), '/\\'), 'name' => basename($MVwEp))); goto rL5QJ; WU19U: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto NFgJo; TRsZ7: $ePQb3 = public_path(''); goto b0La5; UiSvb: $vte_l = $JDFqy->getDriverFullPath($hCl98); goto gn8qP; gn8qP: $MVwEp = FileUtil::savePathToLocalTemp($vte_l, '.' . FileUtil::extension($hCl98)); goto WsUPG; WsUPG: if (!file_exists($MVwEp)) { return Response::generate(-1, L('Safe File Error') . ' - ' . $hCl98); } goto TRsZ7; NFgJo: $mH3Yd = self::prepareOption($mH3Yd); goto Q9a8Z; Q9a8Z: $JDFqy = self::storage($mH3Yd); goto UiSvb; rL5QJ: } public static function preparePathInternalForLocal($hCl98, $mH3Yd = null) { goto cwbz3; VK_Ek: $vte_l = $JDFqy->getDriverFullPathInternal($hCl98); goto ZiQWi; ZiQWi: $MVwEp = FileUtil::savePathToLocalTemp($vte_l, '.' . FileUtil::extension($hCl98)); goto i3jl8; i3jl8: if (!file_exists($MVwEp)) { return Response::generate(-1, L('Safe File Error') . ' - ' . $hCl98); } goto hTvRn; T3M9P: $mH3Yd = self::prepareOption($mH3Yd); goto g69rC; cwbz3: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto T3M9P; g69rC: $JDFqy = self::storage($mH3Yd); goto VK_Ek; AgFwa: return Response::generate(0, null, array('path' => $MVwEp, 'baseUrl' => ltrim(str_replace('\\', '/', substr($MVwEp, strlen($ePQb3))), '/\\'), 'name' => basename($MVwEp))); goto RHpQR; hTvRn: $ePQb3 = public_path(''); goto AgFwa; RHpQR: } public static function getDataTempFileContent($FHmt9, $mH3Yd = null) { goto sJkA0; sJkA0: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto MzCF_; tZHrb: $MVwEp = FileUtil::savePathToLocalTemp($vte_l, '.' . FileUtil::extension($FHmt9)); goto GdWb4; GdWb4: if (!file_exists($MVwEp)) { return null; } goto rt3CV; KvbNH: $JDFqy = self::storage($mH3Yd); goto CI84V; rt3CV: $N19iJ = file_get_contents($MVwEp); goto wieBM; CI84V: $vte_l = $JDFqy->getDriverFullPath($FHmt9); goto tZHrb; wieBM: @unlink($MVwEp); goto vWjp7; MzCF_: $mH3Yd = self::prepareOption($mH3Yd); goto KvbNH; vWjp7: return $N19iJ; goto GonIa; GonIa: } public static function isDataTemp($hCl98) { return preg_match(AbstractDataStorage::PATTERN_DATA_TEMP, $hCl98); } public static function fix($hCl98, $mH3Yd = null) { goto LQul4; RYI3m: if (Str::startsWith($hCl98, '/')) { $hCl98 = substr($hCl98, 1); } goto VuaaX; VuaaX: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto mn4PH; LQul4: if (Str::startsWith($hCl98, 'http://') || Str::startsWith($hCl98, 'https://') || Str::startsWith($hCl98, '//')) { return $hCl98; } goto RYI3m; mn4PH: $mH3Yd = self::prepareOption($mH3Yd); goto TLiM_; upcTJ: return AssetsUtil::fix($JDFqy->getDriverFullPath($hCl98), false); goto Lj6uF; TLiM_: $JDFqy = self::storage($mH3Yd); goto upcTJ; Lj6uF: } public static function fixFull($hCl98, $mH3Yd = null) { goto i3eq1; xU2u5: $mH3Yd = self::prepareOption($mH3Yd); goto iKV1Y; P0irv: if (Str::startsWith($hCl98, '/')) { $hCl98 = substr($hCl98, 1); } goto bFyza; f80o2: return AssetsUtil::fixFull($JDFqy->getDriverFullPath($hCl98), false); goto OUQOx; i3eq1: if (Str::startsWith($hCl98, 'http://') || Str::startsWith($hCl98, 'https://') || Str::startsWith($hCl98, '//')) { return $hCl98; } goto P0irv; iKV1Y: $JDFqy = self::storage($mH3Yd); goto f80o2; bFyza: if (null === $mH3Yd) { $mH3Yd = self::getConfigOption(); } goto xU2u5; OUQOx: } public static function fixDataFull($nx179, $mH3Yd = null) { goto k_D5j; TQC3E: if (!empty($nx179['domain'])) { $YBGO0 = $nx179['domain'] . '/' . $hCl98; } else { $YBGO0 = self::fixFull($YBGO0); } goto d7kGA; XYOI4: $YBGO0 = $hCl98; goto TQC3E; d7kGA: return $YBGO0; goto u1Oe5; k_D5j: $hCl98 = join('/', array(AbstractDataStorage::DATA, $nx179['category'], $nx179['path'])); goto XYOI4; u1Oe5: } }