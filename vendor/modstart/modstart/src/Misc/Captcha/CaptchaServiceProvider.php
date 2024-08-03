<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Misc\Captcha; use Illuminate\Support\ServiceProvider; class CaptchaServiceProvider extends ServiceProvider { public function boot() { $this->publishes(array(__DIR__ . '/../../../config/captcha.php' => config_path('captcha.php')), 'config'); } public function register() { $this->mergeConfigFrom(__DIR__ . '/../../../config/captcha.php', 'captcha'); $this->app->bind('captcha', function ($FFJb_) { return new Captcha($FFJb_['Illuminate\\Filesystem\\Filesystem'], $FFJb_['Illuminate\\Config\\Repository'], $FFJb_['Intervention\\Image\\ImageManager'], $FFJb_['Illuminate\\Session\\Store'], $FFJb_['Illuminate\\Hashing\\BcryptHasher'], $FFJb_['Illuminate\\Support\\Str']); }); } }