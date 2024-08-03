<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; class XKeywordsUtil { public static function match($qLyBy, $N19iJ, &$pOG2v = null) { goto nVLLf; p6Aqk: $T5p2v = str_replace(',', '
', $qLyBy); goto k0tdc; XaFGU: foreach ($T5p2v as $DUr2V) { goto z03Eo; tlfT2: if (false !== strpos($N19iJ, $DUr2V)) { $pOG2v = $DUr2V; return true; } else { if (substr($DUr2V, 0, 1) === '@') { if (@preg_match('/' . substr($DUr2V, 1) . '/', $N19iJ)) { $pOG2v = $DUr2V; return true; } } else { if (false !== strpos($DUr2V, ' ')) { goto QXTfP; jQ02X: if ($BEpbc) { $pOG2v = $DUr2V; return true; } goto iX9MX; QXTfP: $BEpbc = true; goto pee1X; pee1X: foreach (explode(' ', $DUr2V) as $dKmL2) { if (false === strpos($N19iJ, $dKmL2)) { $BEpbc = false; break; } } goto jQ02X; iX9MX: } else { if (preg_match('/((\\*)(\\d+))[^\\d]/', $DUr2V, $jRzIK)) { goto nR2Ew; nR2Ew: $cZS6f = explode($jRzIK[1], $DUr2V); goto jGbn7; jGbn7: $aSSlF = '/' . preg_quote($cZS6f[0]) . '.{3,' . $jRzIK[3] * 3 . '}' . preg_quote($cZS6f[1]) . '/'; goto LZpNk; LZpNk: if (@preg_match($aSSlF, $N19iJ)) { $pOG2v = $DUr2V; return true; } goto otjhg; otjhg: } else { if (false !== strpos($DUr2V, '*')) { goto C6bEz; iJ8lp: $aSSlF = '/' . preg_quote($cZS6f[0]) . '.+' . preg_quote($cZS6f[1]) . '/'; goto SaUMi; SaUMi: if (@preg_match($aSSlF, $N19iJ)) { $pOG2v = $DUr2V; return true; } goto eMjBk; C6bEz: $cZS6f = explode('*', $DUr2V); goto iJ8lp; eMjBk: } } } } } goto U6aMG; z03Eo: $DUr2V = trim($DUr2V); goto vn4Zz; vn4Zz: if (empty($DUr2V)) { continue; } goto tlfT2; U6aMG: } goto wCohx; k0tdc: $T5p2v = explode('
', $T5p2v); goto XaFGU; wCohx: return false; goto pW27r; Yev9c: if (empty($qLyBy) || empty($N19iJ)) { return false; } goto p6Aqk; nVLLf: $qLyBy = trim($qLyBy); goto Yev9c; pW27r: } public static function descriptionHtml() { return '<pre class=\'ub-content-bg\'>' . self::description() . '</pre>'; } public static function description() { $ZIfTd = '关键词匹配说明
· 简单包含匹配: "你好" 匹配 "你好"多条使用,分割
· 忽略顺序同时包含匹配: "你 好" 匹配 "你们好"、"你们好"、"很好你们"
· 顺序同时包含匹配: "你*好" 匹配 "你们好"、"你们很好"，*匹配一个或多个字
· 顺序限定同时包含匹配: "你*1好" 匹配 "你们好"，不能匹配"你们很好"，数字表示最长多少个汉字字符，1个汉字=3英文字母
· 正则表达式匹配："@正则表达式" 匹配 "正则表达式"，@开头表示正则表达式
使用说明
· 多个正则使用半角逗号(,)或换行分割'; return $ZIfTd; } public static function test() { goto Qkh7f; Ii59v: return join('
', $AxBu3); goto E_lj1; Qkh7f: $v8rOz = array('你好', '你好', '你好', '你们好', '你 好', '你们好', '你*好', '你们好', '你*1好', '你们好', '你*1好', '你们很好', '你*2好', '你们很好', '@你们', '你们很好', '@你好', '你们很好'); goto vQGUg; fqFsO: for ($qsK6T = 0; $qsK6T < count($v8rOz); $qsK6T += 2) { $AxBu3[] = sprintf('%-10s%-20s%s', $v8rOz[$qsK6T], $v8rOz[$qsK6T + 1], SerializeUtil::jsonEncode(self::match($v8rOz[$qsK6T], $v8rOz[$qsK6T + 1]))); } goto Ii59v; vQGUg: $AxBu3 = array(); goto fqFsO; E_lj1: } }