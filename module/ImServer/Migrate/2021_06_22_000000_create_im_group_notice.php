<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImGroupNotice extends Migration { public function up() { Schema::create('im_group_notice', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('groupId')->nullable()->comment('群ID'); $S_2ik->bigInteger('creatorUserId')->nullable()->comment('公告创建用户ID'); $S_2ik->string('title', 50)->charset('utf8mb4')->comment('公告标题'); $S_2ik->text('content')->charset('utf8mb4')->comment('公告内容'); $S_2ik->tinyInteger('isTop')->default(0)->comment('是否置顶'); $S_2ik->tinyInteger('isDelete')->default(0)->comment('是否删除'); $S_2ik->tinyInteger('isConfirm')->default(0)->comment('是否需群成员确认公告'); $S_2ik->text('confirmUsers')->nullable()->comment('已确认成员'); $S_2ik->index(array('groupId')); }); } public function down() { } }