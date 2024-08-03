<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateLiveChatAccount extends Migration { public function up() { Schema::create('live_chat_account', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('username', 50)->nullable()->comment('用户名'); $S_2ik->string('nickname', 50)->nullable()->comment('昵称'); $S_2ik->char('password', 32)->nullable()->comment('密码'); $S_2ik->char('passwordSalt', 16)->nullable()->comment('密码Salt'); $S_2ik->string('avatar', 100)->nullable()->comment('头像'); $S_2ik->tinyInteger('status')->nullable()->comment('状态'); $S_2ik->tinyInteger('chatStatus')->nullable()->comment('状态'); $S_2ik->tinyInteger('chatIsLogin')->nullable()->comment('已登录'); $S_2ik->dateTime('chatStatusUpdate')->nullable()->comment('状态更新时间'); $S_2ik->unique('username'); }); } public function down() { } }