<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use Illuminate\Support\Facades\Log; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Response; use Symfony\Component\HttpFoundation\File\UploadedFile; class FileUtil { private static $mimeMap = array('aac' => 'audio/aac', 'abw' => 'application/x-abiword', 'arc' => 'application/x-freearc', 'avi' => 'video/x-msvideo', 'azw' => 'application/vnd.amazon.ebook', 'bin' => 'application/octet-stream', 'bmp' => 'image/bmp', 'bz' => 'application/x-bzip', 'bz2' => 'application/x-bzip2', 'cda' => 'application/x-cdf', 'csh' => 'application/x-csh', 'css' => 'text/css', 'csv' => 'text/csv', 'doc' => 'application/msword', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'eot' => 'application/vnd.ms-fontobject', 'epub' => 'application/epub+zip', 'gz' => 'application/gzip', 'gif' => 'image/gif', 'htm' => 'text/html', 'html' => 'text/html', 'ico' => 'image/vnd.microsoft.icon', 'ics' => 'text/calendar', 'jar' => 'application/java-archive', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'js' => 'text/javascript', 'json' => 'application/json', 'jsonld' => 'application/ld+json', 'mid .midi' => 'audio/midi', 'mjs' => 'text/javascript', 'mp3' => 'audio/mpeg', 'mp4' => 'video/mp4', 'mpeg' => 'video/mpeg', 'mpkg' => 'application/vnd.apple.installer+xml', 'odp' => 'application/vnd.oasis.opendocument.presentation', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet', 'odt' => 'application/vnd.oasis.opendocument.text', 'oga' => 'audio/ogg', 'ogv' => 'video/ogg', 'ogx' => 'application/ogg', 'opus' => 'audio/opus', 'otf' => 'font/otf', 'png' => 'image/png', 'pdf' => 'application/pdf', 'php' => 'application/x-httpd-php', 'ppt' => 'application/vnd.ms-powerpoint', 'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'rar' => 'application/vnd.rar', 'rtf' => 'application/rtf', 'sh' => 'application/x-sh', 'svg' => 'image/svg+xml', 'swf' => 'application/x-shockwave-flash', 'tar' => 'application/x-tar', 'tif .tiff' => 'image/tiff', 'ts' => 'video/mp2t', 'ttf' => 'font/ttf', 'txt' => 'text/plain', 'vsd' => 'application/vnd.visio', 'wav' => 'audio/wav', 'weba' => 'audio/webm', 'webm' => 'video/webm', 'webp' => 'image/webp', 'woff' => 'font/woff', 'woff2' => 'font/woff2', 'xhtml' => 'application/xhtml+xml', 'xls' => 'application/vnd.ms-excel', 'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xml' => 'application/xml', 'xul' => 'application/vnd.mozilla.xul+xml', 'zip' => 'application/zip', '3gp' => 'video/3gpp', '3g2' => 'video/3gpp2', '7z' => 'application/x-7z-compressed'); public static function mime($MbVsF) { $MbVsF = strtolower($MbVsF); return isset(self::$mimeMap[$MbVsF]) ? self::$mimeMap[$MbVsF] : null; } public static function mimeToExt($Q8Yix) { goto jMZED; jMZED: $Q8Yix = strtolower($Q8Yix); goto FbPbg; FbPbg: foreach (self::$mimeMap as $MbVsF => $AkyhD) { if ($Q8Yix == $AkyhD) { return $MbVsF; } } goto SigUM; SigUM: return null; goto YYZwe; YYZwe: } public static function getUploadFileNameWithExt($Z3orD) { goto JdR4U; sKw9J: return $owyBa; goto jYQqX; JdR4U: $owyBa = $Z3orD->getClientOriginalName(); goto KB5S4; KB5S4: if ('blob' == $owyBa) { $MbVsF = FileUtil::mimeToExt($Z3orD->getMimeType()); if ($MbVsF) { $owyBa = 'blob.' . $MbVsF; } else { BizException::throws('获取到的文件名称为空'); } } goto sKw9J; jYQqX: } public static function filePathWritableCheck($WRawc) { goto fug3C; wJZGO: if (empty($WRawc)) { return Response::generateSuccess(); } goto lpABj; QUGUq: $WRawc = array_unique(array_map(function ($vhE98) { return dirname($vhE98); }, $WRawc)); goto iS47s; fug3C: if (empty($WRawc)) { return Response::generateSuccess(); } goto QUGUq; lpABj: foreach ($WRawc as $Z3orD) { goto gJLMw; SVx5f: @unlink($zFlZh); goto D1UuL; WsnXW: if (!file_exists($zFlZh)) { return Response::generateError('目录' . $Z3orD . '测试写入失败，请检查权限'); } goto SVx5f; gJLMw: $zFlZh = base_path($Z3orD . '/._write_check_'); goto fnC21; fnC21: if (false === FileUtil::write($zFlZh, 'ok')) { return Response::generate(-1, '目录不可写：' . $Z3orD); } goto WsnXW; D1UuL: } goto o1DBV; iS47s: $WRawc = array_filter($WRawc, function ($vhE98) use($WRawc) { foreach ($WRawc as $FfQ62) { if ($FfQ62 != $vhE98 && starts_with($FfQ62, $vhE98)) { return false; } } return true; }); goto wJZGO; o1DBV: return Response::generateSuccess(); goto L3MvK; L3MvK: } public static function write($hCl98, $N19iJ) { goto EZxFM; EZxFM: $l4725 = dirname($hCl98); goto JMk8A; JMk8A: if (!file_exists($l4725)) { try { mkdir($l4725, 493, true); } catch (\Exception $l8i0J) { Log::error('mkdir ' . $l4725 . ' failed'); return false; } } goto sITsv; sITsv: try { return file_put_contents($hCl98, $N19iJ) !== false; } catch (\Exception $l8i0J) { return false; } goto ER4hd; ER4hd: } public static function extension($x6itt) { goto OkFGr; OkFGr: $MbVsF = strtolower(pathinfo($x6itt, PATHINFO_EXTENSION)); goto xWyXe; xWyXe: $qsK6T = strpos($MbVsF, '?'); goto HmN9r; HmN9r: if (false !== $qsK6T) { return substr($MbVsF, 0, $qsK6T); } goto e1M9K; e1M9K: return $MbVsF; goto N3MsL; N3MsL: } public static function isPathCategory($x6itt, $gAXRi) { $MbVsF = self::extension($x6itt); return in_array($MbVsF, config('data.upload.' . $gAXRi . '.extensions')); } public static function arrayToCSVString($T5p2v) { goto UC0D_; UC0D_: $FOZev = array(); goto QZn3y; FC1wO: return chr(239) . chr(187) . chr(191) . join('
', $FOZev); goto ytOfY; QZn3y: foreach ($T5p2v as $DUr2V) { goto aoplQ; a6u1P: $FOZev[] = join('', $ijEg1); goto nY_7u; aoplQ: $ijEg1 = array(); goto Krybb; Krybb: foreach ($DUr2V as $yFWLi) { $ijEg1[] = '"' . str_replace('"', '""', $yFWLi) . '",'; } goto a6u1P; nY_7u: } goto FC1wO; ytOfY: } public static function listAllFiles($l4725, $AKg7l = null, &$AxBu3 = array(), $OFAbu = '') { goto a9ubz; XPCLO: return $AxBu3; goto liyto; MrD1V: foreach ($a3n3M as $Z3orD) { goto gI0p0; l8W5N: $AxBu3[] = $Z3orD; goto vOtKG; ZmFYv: $Z3orD['filename'] = $OFAbu ? $OFAbu . DIRECTORY_SEPARATOR . $Z3orD['filename'] : $Z3orD['filename']; goto l8W5N; nNHy1: if ($Z3orD['isDir']) { self::listAllFiles($Z3orD['path'] . '/' . $Z3orD['filename'], $AKg7l, $AxBu3, $OFAbu ? $OFAbu . DIRECTORY_SEPARATOR . $Z3orD['filename'] : $Z3orD['filename']); } goto ZmFYv; gI0p0: if (null !== $AKg7l && !call_user_func($AKg7l, $Z3orD)) { continue; } goto nNHy1; vOtKG: } goto XPCLO; a9ubz: $a3n3M = self::listFiles($l4725, '*|.*'); goto MrD1V; liyto: } public static function listFiles($owyBa, $Elc9S = '*') { goto XHdhq; x19lz: usort($l4725, function ($Z8OEc, $hc1S8) { if ($Z8OEc['isDir'] && $hc1S8['isDir'] || !$Z8OEc['isDir'] && !$hc1S8['isDir']) { return $Z8OEc['filename'] > $hc1S8['filename'] ? 1 : -1; } else { goto A6n6F; sXqJO: if ($Z8OEc['filename'] == $hc1S8['filename']) { return 0; } goto JE5Ia; JE5Ia: return $Z8OEc['filename'] > $hc1S8['filename'] ? -1 : 1; goto SahXV; A6n6F: if ($Z8OEc['isDir']) { return -1; } else { if ($hc1S8['isDir']) { return 1; } } goto sXqJO; SahXV: } }); goto udxbx; KCk8u: $qsK6T = 0; goto tyU6e; PKzI0: foreach ($niB11 as $Elc9S) { $T5p2v = glob($owyBa . $Elc9S); if ($T5p2v !== false) { foreach ($T5p2v as $Z3orD) { goto EYuS0; Fzcr6: $l4725[$qsK6T]['atime'] = @fileatime($Z3orD); goto xHFaA; EYuS0: $vhE98 = basename($Z3orD); goto w0Wnd; dL62p: $l4725[$qsK6T]['owner'] = @fileowner($Z3orD); goto ZpawK; ZpawK: $l4725[$qsK6T]['perms'] = substr(base_convert(@fileperms($Z3orD), 10, 8), -4); goto Fzcr6; w0Wnd: if ($vhE98 === '..' || $vhE98 === '.') { continue; } goto xl4Mt; azjHX: $l4725[$qsK6T]['type'] = @filetype($Z3orD); goto f0cER; f0cER: $l4725[$qsK6T]['ext'] = is_file($Z3orD) ? strtolower(substr(strrchr(basename($Z3orD), '.'), 1)) : ''; goto BP5Ei; WeIi5: $l4725[$qsK6T]['isWritable'] = is_writable($Z3orD); goto rnxmR; dK3sO: $l4725[$qsK6T]['isFile'] = is_file($Z3orD); goto UWt48; rnxmR: $qsK6T++; goto F17ja; xHFaA: $l4725[$qsK6T]['ctime'] = @filectime($Z3orD); goto gkxyl; ugJz3: $l4725[$qsK6T]['isReadable'] = is_readable($Z3orD); goto WeIi5; xl4Mt: $l4725[$qsK6T]['filename'] = $vhE98; goto FEJ4W; UWt48: $l4725[$qsK6T]['isLink'] = is_link($Z3orD); goto ugJz3; Ef0FD: $l4725[$qsK6T]['size'] = @filesize($Z3orD); goto azjHX; BP5Ei: $l4725[$qsK6T]['isDir'] = is_dir($Z3orD); goto dK3sO; AM2og: $l4725[$qsK6T]['pathname'] = realpath($Z3orD); goto dL62p; FEJ4W: $l4725[$qsK6T]['path'] = dirname($Z3orD); goto AM2og; gkxyl: $l4725[$qsK6T]['mtime'] = @filemtime($Z3orD); goto Ef0FD; F17ja: } } } goto x19lz; XHdhq: if (strpos($Elc9S, '|') !== false) { $niB11 = explode('|', $Elc9S); } else { $niB11[0] = $Elc9S; } goto KCk8u; VWeMi: if (is_dir($owyBa)) { $owyBa = rtrim($owyBa, '/\\') . '/'; } goto PKzI0; udxbx: return $l4725; goto ECV_R; tyU6e: $l4725 = array(); goto VWeMi; ECV_R: } public static function nameWithoutExtension($x6itt) { goto usbZK; usbZK: $x6itt = self::name($x6itt); goto PSKr4; dUz9j: if (false !== $qsK6T) { return substr($x6itt, 0, $qsK6T); } goto gYfdO; gYfdO: return $x6itt; goto NwRSr; PSKr4: $qsK6T = strrpos($x6itt, '.'); goto dUz9j; NwRSr: } public static function name($x6itt) { return pathinfo($x6itt, PATHINFO_BASENAME); } public static function formatByte($Q1D8J, $AK6b1 = 2) { goto bZsuL; fxzBN: $DiZll = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'); goto UcJYh; UcJYh: return round($j7D2N / pow(1024, $qsK6T = floor(log($j7D2N, 1024))), $AK6b1) . $DiZll[$qsK6T]; goto EJ_9K; uuEez: if ($j7D2N == 0) { return '0B'; } goto fxzBN; bZsuL: $j7D2N = sprintf('%u', $Q1D8J); goto uuEez; EJ_9K: } public static function formatByteSimple($Q1D8J, $AK6b1 = 2) { goto l235x; Xd_Cs: if ($j7D2N == 0) { return '0B'; } goto b2j1k; b2j1k: $DiZll = array('B', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'); goto b58TI; b58TI: return round($j7D2N / pow(1024, $qsK6T = floor(log($j7D2N, 1024))), $AK6b1) . $DiZll[$qsK6T]; goto dnJqR; l235x: $j7D2N = sprintf('%u', $Q1D8J); goto Xd_Cs; dnJqR: } public static function formattedSizeToBytes($TdYbP) { goto wPzuR; FfbvJ: $pbu2C = isset($DiZll[$H5Xgo]) ? $DiZll[$H5Xgo] : 0; goto dmUaC; dmUaC: return intval($VuXfH * pow(1024, $pbu2C)); goto n9mXs; cdvdi: $H5Xgo = preg_replace('/[^a-z]/', '', $TdYbP); goto S7RW2; wPzuR: $TdYbP = strtolower($TdYbP); goto cdvdi; TKFkG: $DiZll = array('b' => 0, 'kb' => 1, 'mb' => 2, 'gb' => 3, 'tb' => 4, 'k' => 1, 'm' => 2, 'g' => 3, 't' => 4); goto FfbvJ; S7RW2: $VuXfH = floatval(preg_replace('/[^0-9.]/', '', $TdYbP)); goto TKFkG; n9mXs: } public static function getAndEnsurePathnameFolder($x6itt) { goto bdThC; R1KZL: return trim($ePQb3, '/') . '/'; goto wrwng; bdThC: $ePQb3 = dirname($x6itt); goto PD9QI; PD9QI: if (!file_exists($ePQb3)) { @mkdir($ePQb3, 493, true); } goto R1KZL; wrwng: } public static function getPathnameFilename($x6itt, $tvaX_ = true) { $T2qO6 = pathinfo($x6itt); return $tvaX_ ? $T2qO6['basename'] : $T2qO6['filename']; } public static function ensureDir($l4725) { if (!file_exists($l4725)) { @mkdir($l4725, 493, true); } } public static function ensureFilepathDir($x6itt) { $l4725 = dirname($x6itt); if (!file_exists($l4725)) { @mkdir($l4725, 493, true); } } public static function number2dir($CeOJi, $DYG2U = 3) { goto sPbFu; S0MnP: for ($qsK6T = 0; $qsK6T < $DYG2U; $qsK6T++) { $C7JwI[] = substr($MXEBL, $qsK6T * 3, 3); } goto kxleF; GInMw: $C7JwI = array(); goto S0MnP; sPbFu: $Niw0h = $DYG2U * 3; goto Valfk; Valfk: $MXEBL = sprintf('%0' . $Niw0h . 'd', $CeOJi); goto GInMw; kxleF: return join('/', $C7JwI); goto neiwH; neiwH: } public static function copy($HirZv, $QWo5w, $V0JlJ = null, $k_TMY = null, $AKg7l = null) { goto ude_w; xLkE2: $HirZv = rtrim($HirZv, '/') . '/'; goto UuGKs; ude_w: if (!file_exists($HirZv)) { return; } goto IBNbn; nJXmt: @mkdir($QWo5w, 493, true); goto pa735; pUc9s: closedir($l4725); goto qhH4K; UuGKs: $QWo5w = rtrim($QWo5w, '/') . '/'; goto C17_E; IBNbn: if (is_file($HirZv)) { if (!$AKg7l || call_user_func($AKg7l, $HirZv, $QWo5w)) { goto VbaOm; wtxtF: if ($k_TMY) { call_user_func($k_TMY, $HirZv, $QWo5w); } goto Rr5TT; Rr5TT: copy($HirZv, $QWo5w); goto Eb9Tc; mDkmh: if (!file_exists($l4725 = dirname($QWo5w))) { @mkdir($l4725, 493, true); } goto wtxtF; VbaOm: if (file_exists($QWo5w) && md5_file($HirZv) == md5_file($QWo5w)) { return; } goto oZwRX; oZwRX: if (null !== $V0JlJ && file_exists($QWo5w)) { @rename($QWo5w, $QWo5w . $V0JlJ); } goto mDkmh; Eb9Tc: } return; } else { if (!$AKg7l || call_user_func($AKg7l, $HirZv, $QWo5w)) { } else { return; } } goto xLkE2; C17_E: $l4725 = opendir($HirZv); goto nJXmt; pa735: while (false !== ($Z3orD = readdir($l4725))) { if ($Z3orD != '.' && $Z3orD != '..') { if (is_dir($HirZv . $Z3orD)) { self::copy($HirZv . $Z3orD . '/', $QWo5w . $Z3orD . '/', $V0JlJ, $k_TMY, $AKg7l); } else { if (!$AKg7l || call_user_func($AKg7l, $HirZv . $Z3orD, $QWo5w . $Z3orD)) { goto oA_LO; hOk2_: copy($HirZv . $Z3orD, $QWo5w . $Z3orD); goto mlfWT; oA_LO: if (file_exists($QWo5w . $Z3orD) && md5_file($QWo5w . $Z3orD) == md5_file($HirZv . $Z3orD)) { continue; } goto v401b; v401b: if (null !== $V0JlJ && file_exists($QWo5w . $Z3orD)) { @rename($QWo5w . $Z3orD, $QWo5w . $Z3orD . $V0JlJ); } goto tZP5y; tZP5y: if ($k_TMY) { call_user_func($k_TMY, $HirZv . $Z3orD, $QWo5w . $Z3orD); } goto hOk2_; mlfWT: } } } } goto pUc9s; qhH4K: } public static function rm($l4725, $E18Db = true) { if (is_dir($l4725)) { goto vXw53; kiUul: if ($E18Db) { @rmdir($l4725); } goto mqhoX; ddoeS: while (($Z3orD = readdir($QGtRk)) !== false) { if ($Z3orD != '.' && $Z3orD != '..') { $YBGO0 = rtrim($l4725, '/\\') . '/' . $Z3orD; if (is_dir($YBGO0)) { self::rm($YBGO0, true); } else { @unlink($YBGO0); } } } goto jWM9H; vXw53: $QGtRk = opendir($l4725); goto ddoeS; jWM9H: closedir($QGtRk); goto kiUul; mqhoX: } else { @unlink($l4725); } return true; } public static function canSafeCleanTemp($hCl98) { goto zfk91; DRBlZ: if (strpos($hCl98, $Qeawk) === 0) { return true; } goto sNtRU; sNtRU: return false; goto iqIYk; R8dkL: $hCl98 = realpath($hCl98); goto DRBlZ; zfk91: $Qeawk = public_path('temp'); goto R8dkL; iqIYk: } public static function safeCleanLocalTemp($hCl98) { goto ckPKh; H5C92: $Qeawk = public_path('temp'); goto ko9l2; ko9l2: if (starts_with($hCl98, $Qeawk)) { @unlink($hCl98); } goto tjGgA; ckPKh: if (empty($hCl98)) { return; } goto H5C92; tjGgA: } public static function safePath($hCl98, $T9wTW = array('public/temp', 'public/data')) { goto c7BDr; AJxgi: $pzs8B = array(); goto EKKhl; x_Zqf: if (!$oZkmx) { BizException::throws('FileSafePath Not Permit'); } goto ZiAzF; ZiAzF: return $hCl98; goto R7cOt; AxJ0L: if (empty($hCl98)) { BizException::throws('FileSafePath File Not Exists'); } goto AJxgi; EKKhl: foreach ($T9wTW as $RfXiF) { $pzs8B[] = realpath(base_path($RfXiF)); } goto zD0gm; c7BDr: $hCl98 = realpath($hCl98); goto AxJ0L; zD0gm: $pzs8B = array_map(function ($RfXiF) { if (PlatformUtil::isWindows()) { return str_replace('/', '\\', $RfXiF); } else { return str_replace('\\', '/', $RfXiF); } }, $pzs8B); goto Lo5nP; F4v3K: foreach ($pzs8B as $DUr2V) { if (starts_with($hCl98, $DUr2V)) { $oZkmx = true; break; } } goto x_Zqf; Lo5nP: $oZkmx = false; goto F4v3K; R7cOt: } public static function safeGetContent($hCl98, $T9wTW = array('public/temp', 'public/data')) { $hCl98 = self::safePath($hCl98, $T9wTW); return file_get_contents($hCl98); } public static function fopenGetContext() { return stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false), 'http' => array('method' => 'GET', 'user_agent' => CurlUtil::defaultUserAgent()))); } public static function savePathToLocalTemp($hCl98, $MbVsF = null, $cnV8X = false) { goto NUzh1; bhlrO: BizException::throwsIf('Unsupported Path Extension', in_array($MbVsF, array('php', 'php3', 'php4', 'php5', 'phps', 'phtml'))); goto u91ge; CqG71: if (StrUtil::startWith($hCl98, 'http://') || StrUtil::startWith($hCl98, 'https://') || StrUtil::startWith($hCl98, '//')) { goto IcJOu; tgELE: if (!file_exists(public_path('temp'))) { @mkdir(public_path('temp')); } goto HVnu5; TpKA8: if (!file_exists($Qeawk)) { return null; } goto FrSda; IcJOu: if (StrUtil::startWith($hCl98, '//')) { $hCl98 = 'http://' . $hCl98; } goto tgELE; HVnu5: $hCl98 = PathUtil::convertPublicToInternal($hCl98); goto acx3W; acx3W: if ($cnV8X) { $vhE98 = @fopen($hCl98, 'rb', false, self::fopenGetContext()); if ($vhE98) { file_put_contents($Qeawk, $vhE98); } } else { goto B12WJ; iP7yq: file_put_contents($Qeawk, $N19iJ); goto prC1s; B12WJ: $N19iJ = CurlUtil::getRaw($hCl98, array(), array('timeout' => 60 * 10)); goto a2bYW; a2bYW: if (empty($N19iJ)) { return null; } goto iP7yq; prC1s: } goto TpKA8; FrSda: } else { if (StrUtil::startWith($hCl98, '/')) { $hCl98 = substr($hCl98, 1); } $Qeawk = public_path($hCl98); } goto xG2Vk; u91ge: $koQFV = EnvUtil::securityKey(); goto WMxbI; tV1M8: $MbVsF = ltrim(strtolower($MbVsF), '.'); goto bhlrO; hDvtc: if (file_exists($Qeawk)) { @touch($Qeawk); return $Qeawk; } goto CqG71; n2Xqk: return $Qeawk; goto Q0Sni; xG2Vk: if (!file_exists($Qeawk)) { return null; } goto n2Xqk; S78rX: if (empty($MbVsF)) { $MbVsF = self::extension($hCl98); } goto tV1M8; WMxbI: $Qeawk = public_path('temp/' . md5($koQFV . ':' . $hCl98) . '.' . $MbVsF); goto hDvtc; NUzh1: if (@file_exists($hCl98)) { return realpath($hCl98); } goto S78rX; Q0Sni: } public static function generateLocalTempPath($MbVsF = 'tmp', $mSCVj = null, $l4e4n = true) { goto imYS6; imYS6: if (!file_exists(public_path('temp'))) { @mkdir(public_path('temp')); } goto ctwYv; ctwYv: if (empty($mSCVj)) { for ($qsK6T = 0; $qsK6T < 10; $qsK6T++) { $RfXiF = 'temp/' . RandomUtil::lowerString(32) . '.' . $MbVsF; $Qeawk = public_path($RfXiF); if (!file_exists($Qeawk)) { return $l4e4n ? $Qeawk : $RfXiF; } } BizException::throws('FileUtil generateLocalTempPath error'); } goto Qtv6F; avOl3: return $l4e4n ? public_path($RfXiF) : $RfXiF; goto uFStw; Qtv6F: $koQFV = EnvUtil::securityKey(); goto AbnFV; AbnFV: $RfXiF = 'temp/' . md5($koQFV . ':' . $mSCVj) . '.' . $MbVsF; goto avOl3; uFStw: } public static function link($dM6RG, $H0Zrf) { if (PlatformUtil::isWindows()) { $Meki8 = is_dir($dM6RG) ? 'J' : 'H'; exec("mklink /{$Meki8} " . escapeshellarg($H0Zrf) . ' ' . escapeshellarg($dM6RG)); } else { symlink($dM6RG, $H0Zrf); } } }