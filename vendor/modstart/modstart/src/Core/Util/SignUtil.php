<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class SignUtil { public static function check($UC0zA, $eBWrF, $e_fZD) { goto VVcFq; VVcFq: if ($UC0zA == self::common($eBWrF, $e_fZD)) { return true; } goto UZnLo; UZnLo: if ($UC0zA == self::common($eBWrF, $e_fZD, 'urlencode')) { return true; } goto D26lm; q1ADr: return false; goto Uhqou; D26lm: if ($UC0zA == self::common($eBWrF, $e_fZD, 'rawurlencode')) { return true; } goto q1ADr; Uhqou: } public static function common($eBWrF, $e_fZD, $IIwC9 = 'trim', $kdcPp = 'app_secret') { goto MC_jL; hCI9r: $ylUv7 = array(); goto NQ5Xk; m0u1P: $UC0zA = md5($ylUv7); goto FuxUA; NQ5Xk: foreach ($eBWrF as $dKmL2 => $yFWLi) { $ylUv7[] = $dKmL2 . '=' . $IIwC9($yFWLi); } goto s_aOT; MC_jL: ksort($eBWrF, SORT_STRING); goto hCI9r; s_aOT: $ylUv7[] = $kdcPp . '=' . $e_fZD; goto WrQMz; FuxUA: return $UC0zA; goto rfT3y; WrQMz: $ylUv7 = join('&', $ylUv7); goto m0u1P; rfT3y: } public static function checkWithoutSecret($UC0zA, $eBWrF, $OFAbu = null) { goto DyUxl; bCad0: return false; goto PZW9j; DyUxl: if ($UC0zA == self::commonWithoutSecret($eBWrF, $OFAbu)) { return true; } goto DjNWb; DjNWb: if ($UC0zA == self::commonWithoutSecret($eBWrF, $OFAbu, 'rawurlencode')) { return true; } goto bCad0; PZW9j: } public static function commonWithoutSecret($eBWrF, $OFAbu = null, $IIwC9 = 'urlencode') { goto sH08F; y3evN: foreach ($eBWrF as $dKmL2 => $yFWLi) { $ylUv7[] = $dKmL2 . '=' . $IIwC9($yFWLi); } goto sSj3v; uzJKN: return $UC0zA; goto Vc7aN; LgikI: $ylUv7 = array(); goto y3evN; pqZtj: if ($OFAbu) { $ylUv7 = $OFAbu . '&' . $ylUv7; } goto NYokG; sH08F: ksort($eBWrF, SORT_STRING); goto LgikI; sSj3v: $ylUv7 = join('&', $ylUv7); goto pqZtj; NYokG: $UC0zA = md5($ylUv7); goto uzJKN; Vc7aN: } }