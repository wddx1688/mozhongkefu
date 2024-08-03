<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Env; class EnvUtil { public static function parse($Z3orD) { goto IboUb; Dlv9b: return $sB_AS; goto IsWh4; IboUb: $sB_AS = array(); goto OfqGc; OfqGc: if (file_exists($Z3orD)) { foreach (explode('
', file_get_contents($Z3orD)) as $ijEg1) { if ($ijEg1 = trim($ijEg1)) { goto vKxoP; YMb9P: $sB_AS[$dKmL2] = $yFWLi; goto QtsC4; AwRuJ: $dKmL2 = trim($YkA9c[0]); goto A_2hI; Tvo85: $yFWLi = trim(join('=', $YkA9c)); goto wLt2n; vKxoP: if (substr($ijEg1, 0, 1) === '#') { continue; } goto zGT2m; wLt2n: switch (strtolower($yFWLi)) { case 'true': case '(true)': $yFWLi = true; break; case 'false': case '(false)': $yFWLi = false; break; case 'empty': case '(empty)': $yFWLi = ''; break; case 'null': case '(null)': $yFWLi = null; break; } goto YMb9P; zGT2m: $YkA9c = explode('=', $ijEg1); goto AwRuJ; A_2hI: array_shift($YkA9c); goto Tvo85; QtsC4: } } } goto Dlv9b; IsWh4: } public static function all($Z3orD = null) { goto iczmx; DOCcK: if (null === $Z3orD) { $Z3orD = base_path('.env'); } goto q121I; XCsOM: if (!empty($RWmLW)) { return $RWmLW; } goto DOCcK; iczmx: global $RWmLW; goto XCsOM; q121I: return self::parse($Z3orD); goto dUS_7; dUS_7: } }