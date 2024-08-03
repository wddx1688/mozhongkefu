<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelUtil; use Module\Banner\Type\BannerType; class ModifyBannerAddType extends Migration { public function up() { Schema::table('banner', function (Blueprint $S_2ik) { $S_2ik->tinyInteger('type')->nullable()->comment(''); if (!\ModStart\Core\Dao\ModelManageUtil::hasTableColumn('banner', 'title')) { $S_2ik->string('title', 100)->nullable()->comment(''); } $S_2ik->string('slogan', 200)->nullable()->comment(''); $S_2ik->string('linkText', 20)->nullable()->comment(''); $S_2ik->tinyInteger('colorReverse')->nullable()->comment(''); }); foreach (ModelUtil::all('banner') as $AVLNU) { ModelUtil::update('banner', $AVLNU['id'], array('type' => BannerType::IMAGE)); } } public function down() { } }