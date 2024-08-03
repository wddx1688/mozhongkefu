<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberFavorite extends Migration { public function up() { Schema::create('member_favorite', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('userId')->comment('用户ID')->nullable(); $S_2ik->string('category', 20)->comment('类别')->nullable(); $S_2ik->integer('categoryId')->comment('所属类别ID')->nullable(); $S_2ik->index(array('userId', 'category')); }); } public function down() { } }