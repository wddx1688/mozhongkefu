<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImUserLoginLog extends Migration { public function up() { Schema::create('im_user_login_log', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('userId')->comment('用户ID'); $S_2ik->string('ip', 20)->comment('登录地址IP'); $S_2ik->index(array('userId')); }); } public function down() { } }