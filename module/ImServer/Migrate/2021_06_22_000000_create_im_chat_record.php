<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImChatRecord extends Migration { public function up() { Schema::create('im_chat_record', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->tinyInteger('chatType')->comment('聊天类型'); $S_2ik->tinyInteger('talkType')->comment('消息类型'); $S_2ik->bigInteger('userId')->nullable()->comment('消息发送者-用户ID'); $S_2ik->bigInteger('toId')->nullable()->comment('消息接收者-用户ID/群ID'); $S_2ik->text('content')->nullable(true)->charset('utf8mb4')->comment('消息内容'); $S_2ik->tinyInteger('isRecall')->comment('是否撤回'); $S_2ik->index(array('userId', 'chatType')); $S_2ik->index(array('toId', 'chatType')); }); } public function down() { } }