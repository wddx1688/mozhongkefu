<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImGroup extends Migration { public function up() { Schema::create('im_group', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('creatorUserId')->nullable()->comment('群创建者'); $S_2ik->string('name', 30)->nullable()->comment('群名'); $S_2ik->string('description', 100)->nullable()->comment('群描述'); $S_2ik->string('avatar', 200)->nullable()->comment('群头像'); $S_2ik->bigInteger('maxUser')->nullable()->comment('最大用户数'); $S_2ik->tinyInteger('isMute')->comment('是否全员禁言，不包含群主或管理员'); $S_2ik->tinyInteger('isDismiss')->comment('是否已解散'); $S_2ik->dateTime('dismissedTime')->nullable()->comment('解散时间'); }); } public function down() { } }