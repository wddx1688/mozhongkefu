<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateLiveChatOfflineMessage extends Migration { public function up() { Schema::create('live_chat_offline_message', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('name', 50)->nullable()->comment('称呼'); $S_2ik->string('contact', 100)->nullable()->comment('联系方式'); $S_2ik->text('content')->nullable()->comment('内容'); $S_2ik->integer('memberUserId')->nullable()->comment('称呼'); }); } public function down() { } }