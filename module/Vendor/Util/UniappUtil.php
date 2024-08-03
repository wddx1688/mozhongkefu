<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use ModStart\Core\Util\PlatformUtil; use ModStart\Core\Util\ReUtil; include_once __DIR__ . '/../Shell/include.php'; class UniappUtil { public static function runOrFail($YmK0O) { goto DkeNH; KEzgn: if ($o8Yz3 !== 0) { shell_echo_error('运行命令 ' . $YmK0O . ' 失败'); die(1); } goto d3CKp; DkeNH: shell_echo_info("开始运行 {$YmK0O}"); goto rPTey; rPTey: passthru($YmK0O, $o8Yz3); goto KEzgn; d3CKp: } public static function build($RrlCs) { goto wgD4S; GEDB2: shell_echo_success('环境正常'); goto ZZpmL; mpm9h: shell_throws_if('请安装 nodejs，安装后自检 npm --version 输出正确', !shell_command_check('npm --version')); goto vvDnv; KPLfp: shell_echo_info('如果您的正在运行的网站还没有更新静态资源，您需要运行如下命令更新模块静态资源'); goto Xy5SL; Pg3VE: passthru('cp -av dist/build/h5/static ' . shell_module_path($NS22k, 'Asset/static/')); goto e24Oo; e24Oo: shell_echo_success('打包完成'); goto RPCwD; EmXVh: shell_echo_block('处理HTML文件'); goto lI4lV; wgD4S: $NS22k = ReUtil::group1('/module[\\/\\\\](.*?)[\\/\\\\]resources/', $RrlCs); goto FDUck; kFkjO: preg_match('/<head>([\\s\\S]+)<\\/head>[\\s\\S]*<body>([\\s\\S]+)<\\/body>/', $n3GvS, $rGUSQ); goto JFCun; xtAwk: shell_throws_if('请进入 ' . $RrlCs . '目录再运行该脚本', getcwd() !== $RrlCs); goto g1PMC; UaqzY: shell_ensure_dir(shell_module_path($NS22k, 'Asset')); goto xtAFq; vvDnv: shell_throws_if('解析模块名称失败', empty($NS22k)); goto GEDB2; RVH9E: $fQCUC = str_replace(array_keys($Eh3Vd), array_values($Eh3Vd), $UK3_V); goto rMfB1; jV7Su: shell_echo_info('更新文件'); goto Pg3VE; CpDMs: shell_file_write($HX37m, $uzyhW); goto xDGy8; Vbjlg: $aE_0U = shell_module_path($NS22k, 'View/m/' . lcfirst($NS22k) . '/head.blade.php'); goto CsTxI; JFCun: $UK3_V = $rGUSQ[1]; goto t438E; q5h5P: shell_echo_info('处理Head : ' . strlen($UK3_V) . ' -> ' . strlen($fQCUC)); goto q_0ok; pk1JG: $Eh3Vd = array('"__cdn_url__/"' => 'window.__msCDN+"vendor/' . $NS22k . '/"', '"/static/' => 'window.__msCDN+"vendor/' . $NS22k . '/static/'); goto UBq9g; t438E: $e8PBh = $rGUSQ[2]; goto lk1Xu; gE5gK: shell_file_write($aE_0U, $fQCUC); goto CpDMs; UBq9g: $mnt2N = glob('dist/build/h5/static/js/*.js'); goto dzkn9; G2jzo: self::runOrFail('npm run build:h5'); goto EmXVh; DBCvI: passthru('rm -rfv ' . shell_module_path($NS22k, 'Asset/static/')); goto jV7Su; JWFNV: self::runOrFail('npm install'); goto G2jzo; lk1Xu: $Eh3Vd = array('__cdn_url__/' => '{{\\ModStart\\Core\\Assets\\AssetsUtil::cdn()}}vendor/' . $NS22k . '/'); goto RVH9E; q_0ok: shell_echo_info('处理Body : ' . strlen($e8PBh) . ' -> ' . strlen($uzyhW)); goto Vbjlg; Xy5SL: shell_echo_info("php artisan modstart:module-install {$NS22k} --force"); goto O6n1o; rMfB1: $uzyhW = str_replace(array_keys($Eh3Vd), array_values($Eh3Vd), $e8PBh); goto q5h5P; g1PMC: shell_throws_if('系统只持支Linux和OSX', !PlatformUtil::isType(array(PlatformUtil::LINUX, PlatformUtil::OSX, PlatformUtil::WINDOWS))); goto mpm9h; FDUck: shell_echo_block('检查环境'); goto xtAwk; CsTxI: $HX37m = shell_module_path($NS22k, 'View/m/' . lcfirst($NS22k) . '/body.blade.php'); goto gE5gK; xtAFq: shell_echo_info('清空目录'); goto DBCvI; kt8hz: shell_echo_block('更新模块静态资源'); goto UaqzY; dzkn9: foreach ($mnt2N as $n8fWJ) { goto UcIQM; UcIQM: shell_echo_info($n8fWJ); goto FVLxo; FVLxo: $n3GvS = file_get_contents($n8fWJ); goto Gj94V; Gj94V: $n3GvS = str_replace(array_keys($Eh3Vd), array_values($Eh3Vd), $n3GvS); goto YrmIa; YrmIa: file_put_contents($n8fWJ, $n3GvS); goto reNkn; reNkn: } goto kt8hz; ZZpmL: shell_echo_block('开始编译'); goto JWFNV; lI4lV: $n3GvS = file_get_contents('dist/build/h5/index.html'); goto kFkjO; xDGy8: shell_echo_block('处理静态文件'); goto pk1JG; RPCwD: shell_echo_block('温馨提示'); goto KPLfp; O6n1o: } }