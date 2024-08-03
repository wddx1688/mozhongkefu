<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberLoginLog extends Migration { public function up() { Schema::create('member_login_log', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('memberUserId')->nullable()->comment('用户ID'); $S_2ik->tinyInteger('deviceType')->nullable()->comment('用户名'); $S_2ik->string('ip', 20)->nullable()->comment('用户名'); $S_2ik->string('userAgent', 400)->nullable()->comment('用户名'); $S_2ik->string('ipLocation', 100)->nullable()->comment('IP地址信息'); $S_2ik->index(array('memberUserId')); }); } public function down() { } }