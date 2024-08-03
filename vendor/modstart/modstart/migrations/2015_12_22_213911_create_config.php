<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateConfig extends Migration { public function up() { Schema::create('config', function (Blueprint $R3agm) { $R3agm->increments('id'); $R3agm->timestamps(); $R3agm->string('key', 100)->nullable()->comment(''); $R3agm->text('value')->nullable()->comment(''); $R3agm->index('key'); }); } public function down() { } }