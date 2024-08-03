<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberUploadCategory extends Migration { public function up() { if (!\ModStart\Core\Dao\ModelManageUtil::hasTable('member_upload_category')) { Schema::create('member_upload_category', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('userId')->nullable()->comment('用户ID'); $S_2ik->string('category', 10)->nullable()->comment('大类'); $S_2ik->integer('pid')->nullable()->comment('上级分类'); $S_2ik->integer('sort')->nullable()->comment('排序'); $S_2ik->string('title', 50)->nullable()->comment('名称'); $S_2ik->index(array('userId')); }); } } public function down() { } }