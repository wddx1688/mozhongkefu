<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDataTemp extends Migration { public function up() { Schema::create('data_temp', function (Blueprint $R3agm) { $R3agm->increments('id'); $R3agm->timestamps(); $R3agm->string('category', 10)->comment('大类')->nullable(); $R3agm->string('path', 40)->comment('路径')->nullable(); $R3agm->string('filename', 200)->comment('原始文件名')->nullable(); $R3agm->unsignedInteger('size')->comment('文件大小')->nullable(); $R3agm->index(array('category', 'path')); }); } public function down() { } }