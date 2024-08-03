<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImUser extends Migration { public function up() { Schema::create('im_user', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->string('biz', 20)->nullable()->comment('用户域'); $S_2ik->bigInteger('bizId')->nullable()->comment('用户ID'); $S_2ik->string('nickname', 50)->nullable()->comment('昵称'); $S_2ik->string('avatar', 200)->nullable()->comment('头像'); $S_2ik->unique(array('biz', 'bizId')); }); } public function down() { } }