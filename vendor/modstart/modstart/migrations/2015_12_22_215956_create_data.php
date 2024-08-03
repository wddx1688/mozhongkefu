<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateData extends Migration { public function up() { Schema::create('data', function (Blueprint $R3agm) { $R3agm->increments('id'); $R3agm->timestamps(); $R3agm->string('category', 10)->nullable()->comment('大类'); $R3agm->string('path', 40)->nullable()->comment('路径'); $R3agm->string('filename', 200)->nullable()->comment('原始文件名'); $R3agm->unsignedInteger('size'); }); } public function down() { } }