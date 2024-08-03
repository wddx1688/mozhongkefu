<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelManageUtil; class CreateBanner extends Migration { public function up() { if (ModelManageUtil::hasTable('banner')) { goto a2RMA; g30JN: if (!in_array('sort', $TCOTa)) { Schema::table('banner', function (Blueprint $S_2ik) { $S_2ik->integer('sort')->nullable()->comment('顺序'); }); } goto Pbodq; a2RMA: $TCOTa = ModelManageUtil::listTableColumns('banner'); goto iEia0; iEia0: if (!in_array('position', $TCOTa)) { Schema::table('banner', function (Blueprint $S_2ik) { $S_2ik->string('position', 50)->nullable()->comment('位置'); }); } goto g30JN; Pbodq: } else { Schema::create('banner', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('position', 50)->nullable()->comment('位置'); $S_2ik->integer('sort')->nullable()->comment('顺序'); $S_2ik->string('image', 100)->nullable()->comment('图片'); $S_2ik->string('link', 200)->nullable()->comment('链接'); }); } } public function down() { } }