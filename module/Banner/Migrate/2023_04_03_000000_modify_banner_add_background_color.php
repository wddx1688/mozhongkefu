<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelUtil; use Module\Banner\Type\BannerType; class ModifyBannerAddBackgroundColor extends Migration { public function up() { Schema::table('banner', function (Blueprint $S_2ik) { $S_2ik->string('backgroundColor', 20)->nullable()->comment('背景色'); }); } public function down() { } }