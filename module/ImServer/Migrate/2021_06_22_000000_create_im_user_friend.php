<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImUserFriend extends Migration { public function up() { Schema::create('im_user_friend', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('userId1')->nullable()->comment('用户1ID'); $S_2ik->bigInteger('userId2')->nullable()->comment('用户2ID'); $S_2ik->dateTime('agreeTime')->nullable()->comment('同意时间'); $S_2ik->string('remark1', 20)->nullable()->comment('用户1备注'); $S_2ik->string('remark2', 20)->nullable()->comment('用户2备注'); $S_2ik->tinyInteger('applyUser')->nullable()->comment('申请用户'); $S_2ik->tinyInteger('status')->nullable()->comment('好友状态'); $S_2ik->index(array('userId1')); $S_2ik->index(array('userId2')); }); } public function down() { } }