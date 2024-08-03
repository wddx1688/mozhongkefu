<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateAdminUpload extends Migration { public function up() { Schema::create('admin_upload', function (Blueprint $R3agm) { $R3agm->increments('id'); $R3agm->timestamps(); $R3agm->integer('userId')->nullable()->comment('用户ID'); $R3agm->string('category', 10)->nullable()->comment('大类'); $R3agm->integer('dataId')->nullable()->comment('文件ID'); $R3agm->integer('uploadCategoryId')->nullable()->comment('分类ID'); $R3agm->index(array('uploadCategoryId')); $R3agm->index(array('userId', 'category')); }); Schema::create('admin_upload_category', function (Blueprint $R3agm) { $R3agm->increments('id'); $R3agm->timestamps(); $R3agm->integer('userId')->nullable()->comment('用户ID'); $R3agm->string('category', 10)->nullable()->comment('大类'); $R3agm->integer('pid')->nullable()->comment('上级分类'); $R3agm->integer('sort')->nullable()->comment('排序'); $R3agm->string('title', 50)->nullable()->comment('名称'); $R3agm->index(array('userId', 'category')); }); } public function down() { } }