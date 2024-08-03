<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\ImageDesign; use Intervention\Image\Facades\Image; use ModStart\Core\Exception\BizException; use ModStart\Core\Input\Response; use ModStart\Core\Provider\FontProvider; use ModStart\Core\Util\FileUtil; use ModStart\Core\Util\QrcodeUtil; use ModStart\Core\Util\SerializeUtil; class ImageDesignUtil { const LINE_BREAK = '[BR]'; public static function renderBase64DataString($atKrA, $E9ciQ = array()) { $oR9zy = self::render($atKrA, $E9ciQ); return 'data:image/png;base64,' . base64_encode($oR9zy); } public static function renderResponse($atKrA, $E9ciQ = array()) { $oR9zy = self::render($atKrA, $E9ciQ); return Response::raw($oR9zy, array('Content-Type' => 'image/png')); } private static function rectRadius($f4cdu, $oduWF, $Qyp0s, $jOjFU) { goto IQsT1; CJSGN: $qwWYp->clear(); goto FRfE_; XvJ5u: $xXX5O->setFillColor($f4cdu); goto KXn7Q; O9gQZ: $qwWYp->newImage($oduWF, $Qyp0s, 'transparent'); goto ro1zL; ro1zL: $qwWYp->setImageFormat('png'); goto eMg3V; KXn7Q: $xXX5O->setStrokeWidth(0); goto R30oX; R30oX: $xXX5O->roundRectangle(0, 0, $oduWF - 1, $Qyp0s, $jOjFU, $jOjFU); goto UKtO3; eMg3V: $qwWYp->drawImage($xXX5O); goto r08tK; FRfE_: $qwWYp->destroy(); goto uaFKM; UKtO3: $qwWYp = new \Imagick(); goto O9gQZ; uaFKM: return $zh_Hz; goto Kzy7o; IQsT1: if (!class_exists('\\ImagickDraw') || !class_exists('\\Imagick')) { return null; } goto o9bIa; o9bIa: $xXX5O = new \ImagickDraw(); goto XvJ5u; r08tK: $zh_Hz = $qwWYp->getImageBlob(); goto CJSGN; Kzy7o: } public static function textLineCount($me7IX) { $WqKF1 = explode(self::LINE_BREAK, $me7IX); return count($WqKF1); } public static function render($atKrA, $E9ciQ = array()) { goto Fa3yQ; VmbCd: BizException::throwsIf('width empty', empty($atKrA['width'])); goto Z_W01; V7F9b: BizException::throwsIf('blocks empty', !isset($atKrA['blocks'])); goto vHOJr; hXtRE: return $oR9zy->encode('png'); goto bMXY_; Z_W01: BizException::throwsIf('height empty', empty($atKrA['height'])); goto hHMNl; y8_EH: $atKrA = SerializeUtil::jsonEncode($atKrA, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); goto IPhnc; hHMNl: BizException::throwsIf('backgroundImage 和 backgroundColor 为空', empty($atKrA['backgroundImage']) && empty($atKrA['backgroundColor'])); goto V7F9b; SKb5D: if (!empty($atKrA['backgroundImage'])) { $Th9zM = FileUtil::savePathToLocalTemp($atKrA['backgroundImage']); $oR9zy = Image::make($Th9zM); } else { $oR9zy = Image::canvas($atKrA['width'], $atKrA['height'], $atKrA['backgroundColor']); } goto r0kPI; vUp24: foreach ($E9ciQ as $U8G_W => $gghxW) { $iuzhV['${' . $U8G_W . '}'] = $gghxW; } goto y8_EH; r0kPI: foreach ($atKrA['blocks'] as $AVLNU) { goto q_qMx; RHdOy: $AVLNU['y'] = intval($AVLNU['y']); goto QjjIA; QjjIA: switch ($AVLNU['type']) { case 'text': goto CWWft; yW5OR: if (!empty($AVLNU['data']['shadowOffset'])) { if (empty($AVLNU['data']['shadowColor'])) { $AVLNU['data']['shadowColor'] = '#000000'; } $cxzkM[] = array('x' => $AVLNU['data']['shadowOffset'], 'y' => $AVLNU['data']['shadowOffset'], 'color' => $AVLNU['data']['shadowColor']); } goto TupfG; hPiEG: $cxzkM[] = array('x' => 0, 'y' => 0, 'color' => $AVLNU['data']['color']); goto LG9RX; EpAGf: $NoCuX = explode(self::LINE_BREAK, $AVLNU['data']['text']); goto q007F; CWWft: $PUKge = isset($AVLNU['data']['lineHeight']) ? $AVLNU['data']['lineHeight'] : 1.2; goto EpAGf; LG9RX: foreach ($cxzkM as $kxIuL) { $o_URc = $AVLNU['y']; foreach ($NoCuX as $xTlrc) { goto bO_Xc; usvQ5: if (empty($xTlrc)) { continue; } goto kgdMD; bO_Xc: $xTlrc = trim($xTlrc); goto usvQ5; kgdMD: $oR9zy->text($xTlrc, $AVLNU['x'] + $kxIuL['x'], $o_URc + $kxIuL['y'], function ($j1iN5) use($AVLNU, $kxIuL, $o_8tM) { $j1iN5->file($o_8tM); $j1iN5->size($AVLNU['data']['size']); $j1iN5->color($kxIuL['color']); $j1iN5->align($AVLNU['data']['align']); $j1iN5->valign('top'); }); goto dUCU6; dUCU6: $o_URc += $AVLNU['data']['size'] * $PUKge; goto R_A3j; R_A3j: } } goto NEQlC; TupfG: if (!empty($AVLNU['data']['shadowBorder'])) { if (empty($AVLNU['data']['shadowColor'])) { $AVLNU['data']['shadowColor'] = '#000000'; } foreach (array(-$AVLNU['data']['shadowBorder'], 0, $AVLNU['data']['shadowBorder']) as $nJy_i) { foreach (array(-$AVLNU['data']['shadowBorder'], 0, $AVLNU['data']['shadowBorder']) as $o_URc) { $cxzkM[] = array('x' => $nJy_i, 'y' => $o_URc, 'color' => $AVLNU['data']['shadowColor']); } } } goto hPiEG; q007F: $cxzkM = array(); goto yW5OR; NEQlC: break; goto S30Ff; S30Ff: case 'rect': goto rlD2w; tbkmq: break; goto rLRUs; ZYLxe: if (isset($AVLNU['data']['radius'])) { $d8sK8 = self::rectRadius($AVLNU['data']['backgroundColor'], $AVLNU['data']['width'], $AVLNU['data']['height'], $AVLNU['data']['radius']); if ($d8sK8) { goto TyHRV; R1dUK: $HkipV = true; goto tMIew; m61cw: $oR9zy->insert($d8sK8, 'top-left', $nJy_i, $o_URc); goto R1dUK; TyHRV: $d8sK8 = Image::make($d8sK8); goto m61cw; tMIew: } } goto fjPeF; oY0pU: $HkipV = false; goto ZYLxe; fjPeF: if (!$HkipV) { $oR9zy->rectangle($nJy_i, $o_URc, $nJy_i + $AVLNU['data']['width'], $o_URc + $AVLNU['data']['height'], function ($xXX5O) use($AVLNU) { $xXX5O->background($AVLNU['data']['backgroundColor']); }); } goto tbkmq; rlD2w: $nJy_i = $AVLNU['x']; goto jQOq8; jQOq8: $o_URc = $AVLNU['y']; goto oY0pU; rLRUs: case 'image': goto Smhzm; jiSyb: if (!empty($AVLNU['data']['opacity'])) { $OHB0h->opacity($AVLNU['data']['opacity']); } goto HqFuK; HqFuK: if (isset($AVLNU['data']['width']) && isset($AVLNU['data']['height'])) { $OHB0h->resize($AVLNU['data']['width'], $AVLNU['data']['height']); } goto Thr9f; Smhzm: $ddJuf = FileUtil::savePathToLocalTemp($AVLNU['data']['image']); goto XY52p; eSbmD: break; goto ejaPx; XY52p: $OHB0h = Image::make($ddJuf); goto jiSyb; Thr9f: $oR9zy->insert($OHB0h, 'top-left', $AVLNU['x'], $AVLNU['y']); goto eSbmD; ejaPx: case 'qrcode': goto Az3yk; Az3yk: $Cjr8h = QrcodeUtil::png($AVLNU['data']['text'], $AVLNU['data']['width']); goto wZ2p3; rDZr3: break; goto ss_Hg; wZ2p3: $Cjr8h = Image::make($Cjr8h); goto NeCWc; NeCWc: $oR9zy->insert($Cjr8h, 'top-left', $AVLNU['x'], $AVLNU['y']); goto rDZr3; ss_Hg: } goto G_BZf; q_qMx: $AVLNU['x'] = intval($AVLNU['x']); goto RHdOy; G_BZf: } goto hXtRE; vHOJr: if (empty($atKrA['font'])) { $o_8tM = FontProvider::firstLocalPathOrFail(); } else { $o_8tM = FileUtil::savePathToLocalTemp($atKrA['font'], 'ttf', true); } goto SKb5D; QL1AQ: $atKrA = json_decode($atKrA, true); goto VmbCd; IPhnc: $atKrA = str_replace(array_keys($iuzhV), array_values($iuzhV), $atKrA); goto QL1AQ; Fa3yQ: BizException::throwsIfEmpty('imageConfig 为空', $atKrA); goto GRclM; GRclM: $iuzhV = array(); goto vUp24; bMXY_: } }