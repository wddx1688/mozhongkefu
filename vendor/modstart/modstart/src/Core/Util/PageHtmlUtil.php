<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class PageHtmlUtil { private static function itemRender($aibkj, $pzyNL, $rXxYm, $ikc2A, $kx1ji) { goto zAyzQ; zAyzQ: $irW2y = array(); goto dzM_w; URQyX: return join('', $irW2y); goto zlBBw; dzM_w: for ($qsK6T = $aibkj; $qsK6T <= $pzyNL; $qsK6T++) { if ($qsK6T == $rXxYm) { $irW2y[] = self::replace($kx1ji['current'], array('%p%' => $qsK6T)); } else { $irW2y[] = self::replace($kx1ji['item'], array('%p%' => $qsK6T, '%s%' => self::buildPage($ikc2A, $qsK6T))); } } goto URQyX; zlBBw: } public static function nextPageUrl($Pm92r, $qp8x7, $rXxYm, $ikc2A = '/url/for/path?page={page}') { goto FlXOX; mc3ql: if ($rXxYm < $BsZSb) { return self::buildPage($ikc2A, $rXxYm + 1); } goto frwm2; frwm2: return null; goto MqgkR; FlXOX: $BsZSb = ceil($Pm92r / $qp8x7); goto mc3ql; MqgkR: } public static function prevPageUrl($Pm92r, $qp8x7, $rXxYm, $ikc2A = '/url/for/path?page={page}') { if ($rXxYm > 1) { return self::buildPage($ikc2A, $rXxYm - 1); } return null; } private static function replace($CiTZx, $kKcR8 = array()) { return str_replace(array_keys($kKcR8), array_values($kKcR8), $CiTZx); } private static function buildPage($ikc2A, $mZ5xK) { return str_replace('{page}', $mZ5xK, $ikc2A); } public static function render($Pm92r, $qp8x7, $rXxYm, $ikc2A = '/url/for/path?page={page}', $kx1ji = null) { goto R0nTQ; R0nTQ: if (is_null($kx1ji)) { $kx1ji = array('warp' => '<div class="pages">%s%</div>', 'more' => '<span class="more">...</span>', 'prev' => '<a class="page" href="%s%">' . L('PrevPage') . '</a>', 'prevDisabled' => null, 'next' => '<a class="page" href="%s%">' . L('NextPage') . '</a>', 'nextDisabled' => null, 'current' => '<span class="current">%p%</span>', 'item' => '<a class="page" href="%s%">%p%</a>'); } goto XXoU4; WWXJh: if (!empty($kx1ji['first'])) { $irW2y[] = self::replace($kx1ji['first'], array('%s%' => self::buildPage($ikc2A, 1))); } goto vqY_W; pLjsD: if (!empty($kx1ji['last'])) { $irW2y[] = self::replace($kx1ji['last'], array('%s%' => self::buildPage($ikc2A, $BsZSb))); } goto vRBom; DhNVe: if ($BsZSb < 6) { if ($BsZSb > 0) { $irW2y[] = self::itemRender(1, $BsZSb, $rXxYm, $ikc2A, $kx1ji); } } else { goto sRgwc; sRgwc: $irW2y[] = self::itemRender(1, 3, $rXxYm, $ikc2A, $kx1ji); goto rYao7; RdbnU: $BTWX7 = $rXxYm + 3; goto DOoaE; YJkV7: if ($BTWX7 > $BsZSb - 3) { $BTWX7 = $BsZSb - 3; } goto FOcHc; c3m7s: if ($BTWX7 < $BsZSb - 3) { $irW2y[] = $kx1ji['more']; } goto Jx0eH; FOcHc: if ($zzR0n > 3 + 1) { $irW2y[] = $kx1ji['more']; } goto RwlU5; RwlU5: $irW2y[] = self::itemRender($zzR0n, $BTWX7, $rXxYm, $ikc2A, $kx1ji); goto c3m7s; Jx0eH: $irW2y[] = self::itemRender($BsZSb - 2, $BsZSb, $rXxYm, $ikc2A, $kx1ji); goto tIZjw; DOoaE: if ($zzR0n < 4) { $zzR0n = 4; } goto YJkV7; rYao7: $zzR0n = $rXxYm - 3; goto RdbnU; tIZjw: } goto GLOgx; XXoU4: $BsZSb = ceil($Pm92r / $qp8x7); goto V1yg1; GLOgx: if ($rXxYm < $BsZSb) { $irW2y[] = self::replace($kx1ji['next'], array('%s%' => self::buildPage($ikc2A, $rXxYm + 1))); } else { if (!empty($kx1ji['nextDisabled'])) { $irW2y[] = $kx1ji['nextDisabled']; } } goto pLjsD; udvqo: $irW2y = array(); goto WWXJh; vqY_W: if ($rXxYm > 1) { $irW2y[] = self::replace($kx1ji['prev'], array('%s%' => self::buildPage($ikc2A, $rXxYm - 1), '%p%' => $rXxYm - 1)); } else { if (!empty($kx1ji['prevDisabled'])) { $irW2y[] = $kx1ji['prevDisabled']; } } goto DhNVe; vRBom: return self::replace($kx1ji['warp'], array('%s%' => join('', $irW2y))); goto ZQyOZ; V1yg1: if ($rXxYm < 1) { $rXxYm = 1; } else { if ($rXxYm > $BsZSb) { $rXxYm = $BsZSb; } } goto udvqo; ZQyOZ: } }