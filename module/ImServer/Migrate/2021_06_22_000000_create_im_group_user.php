<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImGroupUser extends Migration { public function up() { Schema::create('im_group_user', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('groupId')->nullable()->comment('群ID'); $S_2ik->bigInteger('userId')->nullable()->comment('用户ID'); $S_2ik->tinyInteger('role')->nullable()->comment('用户角色'); $S_2ik->tinyInteger('isMute')->comment('是否禁言'); $S_2ik->tinyInteger('isQuit')->comment('是否退群'); $S_2ik->string('groupNickname', 20)->default('')->comment('群昵称'); $S_2ik->dateTime('quitTime')->nullable()->comment('退群时间'); $S_2ik->unique(array('groupId', 'userId')); $S_2ik->index(array('userId')); }); } public function down() { } }