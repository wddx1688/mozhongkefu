<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\EmailSmtp\Core; use Illuminate\Events\Dispatcher; use Illuminate\Support\ServiceProvider; use ModStart\Admin\Config\AdminMenu; use Module\EmailSmtp\Provider\SmtpMailSenderProvider; use Module\Vendor\Provider\MailSender\MailSenderProvider; class ModuleServiceProvider extends ServiceProvider { public function boot(Dispatcher $HLRQG) { goto Oy1q9; D8rc0: MailSenderProvider::register(SmtpMailSenderProvider::class); goto yA_TQ; yA_TQ: $this->app['config']->set('EmailSenderProvider', SmtpMailSenderProvider::NAME); goto ITd6s; Oy1q9: AdminMenu::register(function () { return array(array('title' => L('Site Manage'), 'icon' => 'cog', 'sort' => 400, 'children' => array(array('title' => '短信邮箱', 'children' => array(array('title' => 'SMTP邮箱设置', 'url' => '\\Module\\EmailSmtp\\Admin\\Controller\\ConfigController@setting'), array('title' => 'SMTP邮箱测试', 'url' => '\\Module\\EmailSmtp\\Admin\\Controller\\ConfigController@test')))))); }); goto D8rc0; ITd6s: } public function register() { } }