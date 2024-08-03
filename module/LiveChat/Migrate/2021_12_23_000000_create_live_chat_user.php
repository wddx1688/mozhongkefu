<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateLiveChatUser extends Migration { public function up() { Schema::create('live_chat_user', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('uid', 50)->nullable()->comment('UID'); $S_2ik->integer('channelId')->nullable()->comment('渠道ID'); $S_2ik->integer('memberUserId')->nullable()->comment('关联用户'); $S_2ik->string('nickname', 50)->nullable()->comment('昵称'); $S_2ik->string('ip', 20)->nullable()->comment('IP'); $S_2ik->string('avatar', 200)->nullable()->comment('头像'); $S_2ik->string('name', 50)->nullable()->comment('称呼'); $S_2ik->string('remark', 200)->nullable()->comment('备注'); $S_2ik->unique('uid'); }); } public function down() { } }