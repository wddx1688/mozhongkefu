<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelManageUtil; class CreateAtomic extends Migration { public function up() { if (!ModelManageUtil::hasTable('atomic')) { Schema::create('atomic', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('name', 100)->nullable()->comment(''); $S_2ik->integer('value')->nullable()->comment(''); $S_2ik->integer('expire')->nullable()->comment(''); $S_2ik->unique('name'); $S_2ik->index('expire'); }); } } public function down() { } }