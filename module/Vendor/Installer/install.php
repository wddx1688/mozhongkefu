<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use ModStart\Core\Util\EnvUtil; use ModStart\Core\Util\FileUtil; goto GsYrT; hqV8h: if (file_exists(APP_PATH . '/storage/install.lock')) { ?>
        <div class="ub-alert danger ub-text-center">系统无需重复安装</div>
    <?php  } else { goto cJYM4; VUKMh: text_success('系统：' . PHP_OS); goto Bl5ma; ZLxXF: echo htmlspecialchars(get_env_config('db_host')); goto yao3J; jUAAG: echo INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION; goto oI63R; RtlW6: ?>
                            <?php  goto lK3xb; Bl5ma: ?>
                            <?php  goto fZ8tk; clJEU: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 用户名</label>
                                    <input type="text" style="width:100%;" name="db_username"
                                           value="<?php  goto fcpZy; ntex0: echo htmlspecialchars(get_env_config('db_name')); goto clJEU; lHTe6: ?>
                            <?php  goto SyURC; oI63R: ?>
 安装
        </h1>
        <div class="pb-installer-box">
            <div class="step-menu">
                <?php  goto s5Zjk; XjbfK: ?>
" />
                            <a href="javascript:;" onclick="switch_step('env')" class="btn btn-lg btn-round">
                                上一步
                            </a>
                            <a href="javascript:;" onclick="doSubmit();" class="btn btn-primary btn-lg btn-round">
                                确定安装
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  goto u8OlC; fpjUp: ?>
                            <?php  goto pCN5h; pCN5h: function_exists('token_get_all') ? text_success('PHP tokenizer 扩展') : text_error('缺少 PHP tokenizer 扩展'); goto NfxLf; KA5LG: ?>
</div>
                                <div class="status error ub-alert warning" style="display:none;">
                                    <div>- 配置Nginx/Apache，保证访问 <a href="/install/ping" target="_blank">/install/ping</a> 出现 ok 字样。</div>
                                </div>
                            </div>
                            <div data-public-install-path-warning style="display:none;">
                                <?php  goto vm_CG; qRbjL: ?>
                            <?php  goto AJAm3; c87a1: ?>
                            <?php  goto kMblb; er4_S: ?>
" data-step="env">
                    <div class="content-item-body">
                        <div style="margin:0 auto;">
                            <?php  goto VUKMh; i1ABm: ?>
                        <div class="ub-panel" style="background:#F8F8F8;">
                            <div class="head">
                                <div class="title">
                                    <i class="iconfont icon-user-o"></i>
                                    后台管理信息
                                </div>
                            </div>
                            <div class="body">
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 用户</label>
                                    <input type="text" style="width:100%;" name="username"
                                           value="<?php  goto WkyLz; vm_CG: text_warning('安装路径为 public/install.php ，可能设置错了网站根目录，请仔细检查', 'https://modstart.com/doc/install/start.html#%E5%8F%82%E8%80%83%E9%85%8D%E7%BD%AE'); goto WdaQz; R5bUw: ?>
                            <?php  goto DzAOh; PieX4: ?>
                            <?php  goto tdyJR; xKcJW: echo htmlspecialchars(get_env_config('db_prefix')); goto vfqNo; tkg1o: function_exists('proc_open') ? text_success('proc_open 函数') : text_error('缺少 proc_open 函数', 'https://modstart.com/doc/install/qa.html'); goto RtlW6; QgjIq: echo htmlspecialchars(json_encode(isset($DJgmr) ? $DJgmr : null)); goto XjbfK; WdaQz: ?>
                            </div>
                            <script>
                                if(window.location.href.indexOf('public/install.php')>0){
                                    document.querySelector('[data-public-install-path-warning]').style.display = 'block';
                                }
                            </script>
                        </div>
                    </div>
                    <div class="content-item-foot">
                        <?php  goto QSmlg; g1hce: ?>
                            <?php  goto kBRjZ; ybJqd: text_error('Rewrite规则错误', 'https://modstart.com/doc/install/qa.html#q-rewrite%E8%A7%84%E5%88%99', false); goto KA5LG; QSmlg: if (error_counter(0) > 0) { goto Z1ntP; e1bKQ: ?>
 个问题再进行安装</div>
                        <?php  goto zA2JY; UEtfK: echo error_counter(0); goto e1bKQ; Z1ntP: ?>
                            <div class="ub-alert danger ub-text-center">请解决以上 <?php  goto UEtfK; zA2JY: } else { if (!env_writable()) { ?>
                            <div class="ub-alert danger ub-text-center">/.env文件不可写，请手动配置安装</div>
                        <?php  } else { goto oVi7W; oVi7W: ?>
                            <div style="display:none;margin-top:0.5rem;" data-step-env-next>
                                <?php  goto EVaH1; flSac: ?>
                                <a href="javascript:;" class="btn btn-primary btn-lg btn-round" onclick="switch_step('form')">
                                    下一步
                                </a>
                            </div>
                        <?php  goto GTNCP; EVaH1: if (defined('LICENSE_URL')) { ?>
                                    <a href="javascript:;" class="btn btn-lg btn-round" onclick="switch_step('license')">
                                        上一步
                                    </a>
                                <?php  } goto flSac; GTNCP: } } goto s9mFc; P80Rs: ?>
                            <?php  goto BhhDd; BhhDd: is_dir_really_writable(APP_PATH . '/storage/') ? text_success('/storage/目录可写') : text_error('/storage/目录不可写'); goto QVkLp; fZ8tk: php_version_ok() ? text_success('PHP版本 ' . PHP_VERSION) : text_error('PHP版本要求（' . php_version_requires() . '） 当前为 ' . PHP_VERSION); goto VY8Yf; fcpZy: echo htmlspecialchars(get_env_config('db_username')); goto LiBnR; phzqw: class_exists('pdo') && in_array('mysql', PDO::getAvailableDrivers()) ? text_success('PHP PDO mysql 驱动') : text_error('缺少 PHP PDO mysql 驱动'); goto c87a1; KxwV_: ?>
                            <div data-rewrite-check>
                                <div class="status loading"><div class="ub-alert">Rewrite规则检测中...</div></div>
                                <div class="status success" style="display:none;"><?php  goto CFseA; j0cSX: class_exists('pdo') ? text_success('PHP pdo 扩展') : text_error('缺少 PHP pdo 扩展'); goto OyRfT; DCEkW: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label">数据表前缀</label>
                                    <input type="text" style="width:100%;" name="db_prefix"
                                           value="<?php  goto xKcJW; XplMC: if (!defined('LICENSE_URL')) { echo 'active'; } goto er4_S; BYXgd: echo htmlspecialchars(get_env_config('admin_password')); goto nEJlD; COiUs: ?>
" data-step="env">
                    <i class="iconfont icon-desktop"></i>
                    环境检查
                </a>
                <i class="iconfont icon-angle-right"></i>
                <a href="javascript:;" data-step="form">
                    <i class="iconfont icon-cog"></i>
                    配置安装
                </a>
            </div>
            <div class="step-content">
                <?php  goto XDdeH; DzAOh: function_exists('curl_init') ? text_success('PHP curl 扩展') : text_error('缺少 PHP curl 扩展'); goto PieX4; VY8Yf: ?>
                            <?php  goto bXgr5; NfxLf: ?>
                            <?php  goto Umj5Z; B91tk: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 数据库名</label>
                                    <input type="text" style="width:100%;" name="db_database"
                                           value="<?php  goto ntex0; nEJlD: ?>
"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-item-foot">
                        <?php  goto wjrEi; yao3J: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 端口</label>
                                    <input type="text" style="width:100%;" name="db_port"
                                           value="<?php  goto pHAJF; kBRjZ: function_exists('proc_get_status') ? text_success('proc_get_status 函数') : text_error('缺少 proc_get_status 函数', 'https://modstart.com/doc/install/qa.html'); goto I2Eya; Uib0r: if (version_compare(PHP_VERSION, '5.6.0', 'ge') && version_compare(PHP_VERSION, '5.7.0', 'lt')) { goto JRJRa; JRJRa: ?>
                                <?php  goto tZzye; WLzRI: ?>
                            <?php  goto ATWiB; tZzye: EnvUtil::iniFileConfig('always_populate_raw_post_data') == '-1' ? text_success('验证 always_populate_raw_post_data=-1') : text_error('请配置 always_populate_raw_post_data=-1', 'https://modstart.com/doc/install/qa.html'); goto WLzRI; ATWiB: } goto lHTe6; l57oQ: ?>
                            <?php  goto zSPP8; mssGG: if (!empty($DJgmr)) { goto aoqi9; frzSS: if (!empty($DJgmr['envs'])) { goto yPMRe; yVXWN: foreach ($DJgmr['envs'] as $colPr) { goto l8Ptp; uPXOz: ?>
</div>
                                                <div class="field">
                                                    <input class="form" type="text" name="<?php  goto D_R3e; Z0Rqr: ?>
" value="<?php  goto ulDgx; by7ka: ?>
</div>
                                                </div>
                                            </div>
                                        <?php  goto ovcmf; l8Ptp: ?>
                                            <div class="line">
                                                <div class="label"><span class="ub-text-danger">*</span> <?php  goto EETiY; D_R3e: echo $colPr['name']; goto Z0Rqr; hl4DD: ?>
" />
                                                    <div class="help"><?php  goto mT0Rl; EETiY: echo htmlspecialchars($colPr['label']); goto uPXOz; ulDgx: echo htmlspecialchars($colPr['default']); goto hl4DD; mT0Rl: echo $colPr['desc']; goto by7ka; ovcmf: } goto WivcH; yPMRe: ?>
                                        <?php  goto yVXWN; WivcH: ?>
                                    <?php  goto ZWVla; ZWVla: } goto INO5_; aoqi9: ?>
                            <div class="ub-panel" style="background:#F8F8F8;">
                                <div class="head">
                                    <div class="title">
                                        <i class="iconfont icon-cog"></i>
                                        应用配置信息
                                    </div>
                                </div>
                                <div class="body">
                                    <?php  goto frzSS; INO5_: ?>
                                </div>
                            </div>
                        <?php  goto ITHre; ITHre: } goto i1ABm; cJYM4: ?>
        <h1 class="ub-text-center" style="color:#FFF;">
            <i class="iconfont icon-tools"></i>
            <?php  goto jUAAG; OyRfT: ?>
                            <?php  goto phzqw; zSPP8: is_dir_really_writable(APP_PATH . '/bootstrap/cache/') ? text_success('/bootstrap/cache/目录可写') : text_error('/bootstrap/cache/目录不可写'); goto KxwV_; HMyXN: ?>
                            <?php  goto tkg1o; pHAJF: echo htmlspecialchars(get_env_config('db_port')); goto B91tk; Umj5Z: function_exists('finfo_file') ? text_success('PHP fileinfo 扩展') : text_error('缺少 PHP fileinfo 扩展'); goto HMyXN; Hcx80: ?>
                            <?php  goto mCGdy; SyURC: is_dir_really_writable(APP_PATH . '/bootstrap/') ? text_success('/bootstrap/目录可写') : text_error('/bootstrap/目录不可写'); goto P80Rs; kMblb: function_exists('mb_internal_encoding') ? text_success('PHP mbstring 扩展') : text_error('缺少 PHP mbstring 扩展'); goto fpjUp; I2Eya: ?>
                            <?php  goto Uib0r; WkyLz: echo htmlspecialchars(get_env_config('admin_username')); goto SOkC1; FsmyA: if (!defined('LICENSE_URL')) { echo 'active'; } goto COiUs; B3nV3: ?>
                            <?php  goto j0cSX; tdyJR: class_exists('ZipArchive') ? text_success('PHP zip 扩展') : text_error('缺少 PHP zip 扩展'); goto qRbjL; lK3xb: function_exists('putenv') ? text_success('putenv 函数') : text_error('缺少 putenv 函数', 'https://modstart.com/doc/install/qa.html'); goto g1hce; SOkC1: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 密码</label>
                                    <input type="text" style="width:100%;" name="password"
                                           placeholder="<?php  goto BYXgd; aS_I7: ?>
                            <?php  goto v49T4; XDdeH: if (defined('LICENSE_URL')) { goto f3307; mCdn8: ?>
"></iframe>
                        </div>
                        <div class="content-item-foot">
                            <div>
                                <div style="color:red;padding-bottom:1rem;">
                                    禁止使用本产品进行违法违规业务，我们将对违规使用者停止授权并永久封停账号
                                </div>
                                <label style="border:none;margin-top:-10px;margin-right:0;padding-right:0;">
                                    <input type="checkbox" name="installLicense" style="vertical-align:middle;margin-right:0.2rem;" value="1"/>
                                    我已阅读协议并同意所有内容
                                </label>
                            </div>
                            <div style="margin-top:0.5rem;">
                                <a href="javascript:;" class="btn btn-primary btn-lg btn-round" onclick="doStepEnv()">
                                    下一步
                                </a>
                            </div>
                            <script>
                                function doStepEnv(){
                                    if(!$('[name="installLicense"]').is(':checked')){
                                        window.api.dialog.tipError('请先同意协议');
                                        return false;
                                    }
                                    switch_step('env');
                                    return false;
                                }
                            </script>
                        </div>
                    </div>
                <?php  goto KDeOn; wgVhA: echo LICENSE_URL; goto mCdn8; f3307: ?>
                    <div class="step-content-item active" data-step="license">
                        <div class="content-item-body">
                            <iframe src="<?php  goto wgVhA; KDeOn: } goto q5J4d; R1kOY: ?>
</div>
                                <div class="status error" style="display:none;"><?php  goto ybJqd; s5Zjk: if (defined('LICENSE_URL')) { ?>
                    <a href="javascript:;" class="active" data-step="license">
                        <i class="iconfont icon-file"></i>
                        安装协议
                    </a>
                    <i class="iconfont icon-angle-right"></i>
                <?php  } goto QDBu1; AJAm3: function_exists('openssl_open') ? text_success('PHP openssl 扩展') : text_error('缺少 PHP openssl 扩展'); goto Hcx80; s9mFc: ?>
                    </div>
                </div>
                <div class="step-content-item ub-form" data-step="form">
                    <div class="content-item-body">
                        <div class="ub-panel" style="background:#F8F8F8;">
                            <div class="head">
                                <div class="title">
                                    <i class="iconfont icon-credit"></i>
                                    MySQL数据库
                                </div>
                            </div>
                            <div class="body">
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 主机</label>
                                    <input type="text" style="width:100%;" name="db_host"
                                           value="<?php  goto ZLxXF; pkBtT: ?>
                        <div style="margin-top:0.5rem;">
                            <input type="hidden" name="installLicense" value="1"/>
                            <input type="hidden" name="INSTALL_CONFIG" value="<?php  goto QgjIq; LiBnR: ?>
"/>
                                </div>
                                <div class="line">
                                    <label class="label"><span class="ub-text-danger">*</span> 密码</label>
                                    <input type="text" style="width:100%;" name="db_password"
                                           value="<?php  goto Z93h9; QVkLp: ?>
                            <?php  goto q9iOr; q9iOr: is_dir_really_writable(APP_PATH . '/public/') ? text_success('/public/目录可写') : text_error('/public/目录不可写'); goto l57oQ; q5J4d: ?>
                <div class="step-content-item <?php  goto XplMC; wjrEi: if (defined('DEMO_DATA')) { ?>
                            <div>
                                <label style="border:none;margin-top:-10px;">
                                    <input type="checkbox" style="vertical-align:middle;" name="installDemo" value="1"/>
                                    初始化安装演示数据
                                </label>
                            </div>
                        <?php  } goto pkBtT; vfqNo: ?>
"/>
                                </div>
                            </div>
                        </div>
                        <?php  goto mssGG; bXgr5: text_success('最大上传：' . FileUtil::formatByte(EnvUtil::env('uploadMaxSize'))); goto R5bUw; Z93h9: echo htmlspecialchars(get_env_config('db_password')); goto DCEkW; v49T4: function_exists('bcmul') ? text_success('PHP bcmath 扩展') : text_error('缺少 PHP bcmath 扩展'); goto B3nV3; CFseA: text_success('Rewrite规则正确'); goto R1kOY; QDBu1: ?>
                <a href="javascript:;" class="<?php  goto FsmyA; mCGdy: function_exists('exif_read_data') ? text_success('PHP exif 扩展') : text_error('缺少 PHP exif 扩展'); goto aS_I7; u8OlC: } goto nbMTO; EmptS: ?>
">
    <link rel="stylesheet" href="/asset/theme/default/style.css?<?php  goto SK03R; uKiW3: echo time(); goto fhznU; aTgYO: echo time(); goto EmptS; Q5p1x: echo time(); goto jIRim; fhznU: ?>
">
    <link rel="stylesheet" href="/asset/layui/css/layui.css?<?php  goto aTgYO; TFu0W: echo base64_encode('<?xml version="1.0" encoding="UTF-8"?><svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><text x="50%" y="50%" font-size="16" fill="#444444" style="transform:rotate(-45deg);transform-origin:center;" font-family="system-ui,sans-serif" text-anchor="middle" dominant-baseline="middle">' . INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION . '</text></svg>'); goto mVgw8; GsYrT: include __DIR__ . '/function.php'; goto Dozj_; CyEzF: ?>
">
    <title><?php  goto jYVAf; mVgw8: ?>
");
        }
        .pb-installer-box{
            background-image:url("data:image/svg+xml;base64,<?php  goto ZFe6O; wdRLa: echo time(); goto XtRtA; jIRim: ?>
"></script>
    <link rel="stylesheet" href="/asset/vendor/iconfont/iconfont.css?<?php  goto uKiW3; KblAz: ?>
"></script>
    <script src="/asset/layui/layui.js?<?php  goto Q5p1x; Dozj_: ?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <script src="/asset/vendor/jquery.js?<?php  goto wdRLa; SK03R: echo time(); goto CyEzF; XtRtA: ?>
"></script>
    <script src="/asset/common/base.js?<?php  goto LLjNJ; lRwml: ?>
 安装助手</title>
    <style type="text/css">
        body, html {
            min-height: 100%;
        }
        body {
            background-image:url("data:image/svg+xml;base64,<?php  goto TFu0W; jYVAf: echo INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION; goto lRwml; B6C87: ?>
");
            background-color:#FFF;
            border-radius:0.5rem;
        }
        .pb-installer-box .step-menu{
            padding:0 0.5rem;
            text-align: center;
            border-bottom:1px solid #EEE;
        }
        .pb-installer-box .step-menu a{
            display:inline-block;
            padding:0.8rem;
            color:var(--color-text);
            text-align:center;
            border-bottom:1px solid #EEE;
            font-size:0.8rem;
        }
        .pb-installer-box .step-menu > .iconfont{
            color:var(--color-muted);
            font-size:0.8rem;
        }
        .pb-installer-box .step-menu a.checked{
            color:var(--color-primary);
        }
        .pb-installer-box .step-menu a.active{
            color:var(--color-primary);
        }
        .pb-installer-box .step-content .step-content-item{
            display:none;
        }
        .pb-installer-box .step-content .step-content-item.active{
            display:block;
        }
        .pb-installer-box .step-content .step-content-item .content-item-body{
            padding:1rem;
        }
        .pb-installer-box .step-content .step-content-item .content-item-foot{
            padding: 1rem 1rem 2rem 1rem;
            text-align:center;
        }
        .pb-installer-box .step-content .step-content-item iframe{
            width:100%;
            border:1px solid #EEE;
            border-radius:0.25rem;
            height:calc( 100vh - 200px );
        }
    </style>
</head>
<body style="background-color:#333;padding:40px 0;">
<div style="width:960px;min-height:100vh;margin:0 auto;">

    <?php  goto hqV8h; LLjNJ: echo time(); goto KblAz; ZFe6O: echo base64_encode('<?xml version="1.0" encoding="UTF-8"?><svg width="100" height="100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><text x="50%" y="50%" font-size="10" fill="#EEEEEE" style="transform:rotate(-45deg);transform-origin:center;" font-family="system-ui,sans-serif" text-anchor="middle" dominant-baseline="middle">' . INSTALL_APP_NAME . ' V' . INSTALL_APP_VERSION . '</text></svg>'); goto B6C87; nbMTO: ?>
</div>
<script>
    function switch_step(name){
        $('.pb-installer-box .step-content .step-content-item').removeClass('active');
        $('.pb-installer-box .step-content .step-content-item[data-step='+name+']').addClass('active');
        $('.pb-installer-box .step-menu a').removeClass('active');
        $('.pb-installer-box .step-menu a[data-step='+name+']').addClass('active');
        return false;
    }
    $(function () {
        var $rewriteCheck = $('[data-rewrite-check]');
        $.ajax({
            url: '/install/ping?'+Math.random(),
            type: 'GET',
            success: function(data){
                if('ok'===data){
                    $rewriteCheck.find('.status').hide().filter('.success').show();
                    $('[data-step-env-next]').show();
                }else{
                    $rewriteCheck.find('.status').hide().filter('.error').show();
                }
            },
            error: function(data) {
                $rewriteCheck.find('.status').hide().filter('.error').show();
            }
        });
        window.doSubmit = function(){
            var data = {};
            var $form = $('.ub-form');
            $form.find('input[type=text],input[type=hidden]').each(function(i,o){
                data[$(o).attr('name')] = $(o).val();
            });
            $form.find('input[type=checkbox]:checked').each(function(i,o){
                data[$(o).attr('name')] = $(o).val();
            });
            window.api.dialog.loadingOn('正在提交表单..');
            window.api.base.post('/install/prepare',data,function(res){
                window.api.dialog.loadingOff();
                window.api.base.defaultFormCallback(res, {
                    success: function (res) {
                        window.api.dialog.loadingOn('正在安装系统，可能需要较长时间，请耐心等待...');
                        window.api.base.post('/install/execute',data,function(res){
                            window.api.dialog.loadingOff();
                            window.api.base.defaultFormCallback(res);
                        });
                    }
                })
            });
            return false;
        };
    });
</script>
</body>
</html>