<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImService extends Migration { public function up() { Schema::create('im_service', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('creatorUserId')->nullable()->comment('创建者'); $S_2ik->bigInteger('serviceUserId')->nullable()->comment('服务者'); $S_2ik->string('name', 30)->nullable()->comment('名称'); $S_2ik->string('description', 100)->nullable()->comment('描述'); $S_2ik->string('avatar', 200)->nullable()->comment('头像'); $S_2ik->tinyInteger('status')->nullable()->comment('状态'); $S_2ik->string('lastTalkText', 100)->nullable()->comment('最近一条'); $S_2ik->dateTime('updateTime')->nullable()->comment('排序'); $S_2ik->unique(array('creatorUserId', 'name')); $S_2ik->index(array('name', 'status', 'updateTime')); }); } public function down() { } }