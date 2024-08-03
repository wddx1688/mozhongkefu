<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberUpload extends Migration { public function up() { if (!\ModStart\Core\Dao\ModelManageUtil::hasTable('member_upload')) { Schema::create('member_upload', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->unsignedInteger('userId')->nullable()->comment('用户ID'); $S_2ik->string('category', 10)->nullable()->comment('大类'); $S_2ik->unsignedInteger('dataId')->nullable()->comment('文件ID'); $S_2ik->integer('uploadCategoryId')->nullable()->comment('分类ID'); $S_2ik->index(array('userId', 'uploadCategoryId')); $S_2ik->index(array('dataId')); }); } } public function down() { } }