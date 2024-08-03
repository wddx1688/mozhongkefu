<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImUserChatList extends Migration { public function up() { Schema::create('im_user_chat_list', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('userId')->comment('用户ID'); $S_2ik->unsignedTinyInteger('chatType')->comment('聊天类型'); $S_2ik->bigInteger('friendUserId')->comment('好友ID'); $S_2ik->bigInteger('groupId')->comment('群聊ID'); $S_2ik->bigInteger('serviceId')->comment('服务ID'); $S_2ik->unsignedTinyInteger('isTop')->comment('是否置顶'); $S_2ik->unsignedTinyInteger('isNotDisturb')->comment('是否消息免打扰'); $S_2ik->index(array('userId', 'friendUserId')); $S_2ik->index(array('userId', 'groupId')); $S_2ik->index(array('userId', 'serviceId')); }); } public function down() { } }