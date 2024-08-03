<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateLiveChatChannel extends Migration { public function up() { Schema::create('live_chat_channel', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('alias', 50)->nullable()->comment('别名'); $S_2ik->string('title', 50)->nullable()->comment('名称'); $S_2ik->text('chatPanelRight')->nullable()->comment('聊天窗口右侧信息'); $S_2ik->unique('alias'); }); } public function down() { } }