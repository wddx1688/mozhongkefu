<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ goto MjhLN; tB2Lh: function shell_throws_if($miOiF, $pq9Mc) { if ($pq9Mc) { shell_echo_error($miOiF); die(-1); } } goto Oo7Q5; gfYkT: function shell_module_path($NS22k, $eGUxe) { return join('/', array(rtrim(shell_module_base(), '/'), $NS22k, $eGUxe)); } goto C9z9S; g2JIf: function shell_echo_success($miOiF) { echo "[32m> INFO  : {$miOiF} [0m\n"; } goto n8epX; rzl5x: function shell_echo_block($miOiF) { goto PmrFp; BmfQZ: echo ' ' . str_repeat('-', 80) . '
'; goto zDU8C; Ead04: echo sprintf('| %-79s|', $miOiF) . '
'; goto BmfQZ; OprOt: echo ' ' . str_repeat('-', 80) . '
'; goto Ead04; zDU8C: echo '[0m'; goto dByHL; PmrFp: echo '
[33m'; goto OprOt; dByHL: } goto w2MvE; w2MvE: function shell_echo_error($miOiF) { echo "[31m> ERROR : {$miOiF} [0m\n"; } goto g2JIf; rhq7M: function shell_echo($miOiF) { echo '> ' . $miOiF . '
'; } goto tB2Lh; C9z9S: function shell_ensure_dir($RrlCs) { if (!file_exists($RrlCs)) { mkdir($RrlCs, 493, true); } } goto rzl5x; Oo7Q5: function shell_command_check($YmK0O) { @exec($YmK0O, $pkbsE, $FZUh3); return $FZUh3 === 0; } goto hAuEv; ICcOC: include __DIR__ . '/../../../vendor/modstart/modstart/src/Core/Util/ReUtil.php'; goto C72yl; n8epX: function shell_echo_info($miOiF) { echo "[36m> INFO  : {$miOiF} [0m\n"; } goto rhq7M; MjhLN: include __DIR__ . '/../../../vendor/modstart/modstart/src/Core/Util/PlatformUtil.php'; goto ICcOC; C72yl: function shell_module_base() { return realpath(__DIR__ . '/../..'); } goto gfYkT; hAuEv: function shell_file_write($r1mDy, $n3GvS) { goto NN0ez; NN0ez: $RrlCs = dirname($r1mDy); goto ZJ4Ey; gBnc4: file_put_contents($r1mDy, $n3GvS); goto TT8wi; ZJ4Ey: if (!file_exists($RrlCs)) { mkdir($RrlCs, 493, true); } goto gBnc4; TT8wi: }