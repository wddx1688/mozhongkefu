<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Developer; use ModStart\Core\Util\SerializeUtil; class LangUtil { public static function extractFileLangScripts($Z3orD) { goto qTm0B; g4vry: return ''; goto OB0lM; qTm0B: $Z3orD = base_path($Z3orD); goto zlnGX; uYawM: $N19iJ = file_get_contents($Z3orD); goto KTq2m; JicQT: if (!empty($jRzIK[1])) { goto y72fr; MmKyT: return '
{!! \\ModStart\\Developer\\LangUtil::langScriptPrepare(' . SerializeUtil::jsonEncodePretty(array_keys($AvnxQ)) . ') !!}'; goto ZQWUB; hTg4z: foreach ($jRzIK[0] as $DUr2V) { if (preg_match('/^L\\([\'|"](.*?)[\'|"].*?\\)/', $DUr2V, $v8v3G)) { $AvnxQ[$v8v3G[1]] = L($v8v3G[1]); } } goto DbF83; y72fr: $AvnxQ = array(); goto hTg4z; DbF83: ksort($AvnxQ); goto MmKyT; ZQWUB: } goto g4vry; zlnGX: if (!file_exists($Z3orD)) { return ''; } goto uYawM; KTq2m: preg_match_all('/L\\((([^()]*|\\([^()]*\\))*)\\)/', $N19iJ, $jRzIK); goto JicQT; OB0lM: } public static function langScriptPrepare($AvnxQ) { goto pBnHF; HgRHw: return join('
', $oKMGD); goto wKWD6; sr3wj: $oKMGD[] = '  window.lang = window.lang||{};'; goto Lbs92; i67Jh: $oKMGD[] = '})();'; goto HgRHw; Q7ePZ: $oKMGD[] = '
(function(){'; goto sr3wj; Lbs92: foreach ($AvnxQ as $QTQoT) { $oKMGD[] = '  window.lang[' . SerializeUtil::jsonEncode($QTQoT) . ']=' . SerializeUtil::jsonEncode(L($QTQoT)) . ';'; } goto i67Jh; pBnHF: $oKMGD = array(); goto Q7ePZ; wKWD6: } }