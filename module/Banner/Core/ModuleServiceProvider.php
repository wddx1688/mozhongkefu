<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Banner\Core; use Illuminate\Events\Dispatcher; use Illuminate\Support\ServiceProvider; use ModStart\Admin\Config\AdminMenu; use ModStart\Module\ModuleClassLoader; class ModuleServiceProvider extends ServiceProvider { public function boot(Dispatcher $HLRQG) { if (method_exists(ModuleClassLoader::class, 'addClass')) { ModuleClassLoader::addClass('MBanner', __DIR__ . '/../Helpers/MBanner.php'); } AdminMenu::register(function () { return array(array('title' => '物料管理', 'icon' => 'description', 'sort' => 200, 'children' => array(array('title' => '轮播图片', 'url' => '\\Module\\Banner\\Admin\\Controller\\BannerController@index')))); }); } public function register() { } }