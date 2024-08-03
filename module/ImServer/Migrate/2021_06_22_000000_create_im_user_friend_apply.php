<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImUserFriendApply extends Migration { public function up() { Schema::create('im_user_friend_apply', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('userId')->nullable(); $S_2ik->bigInteger('friendUserId')->nullable(); $S_2ik->tinyInteger('status')->nullable(); $S_2ik->string('remark', 50)->nullable(); $S_2ik->index(array('userId')); $S_2ik->index(array('friendUserId')); }); } public function down() { } }