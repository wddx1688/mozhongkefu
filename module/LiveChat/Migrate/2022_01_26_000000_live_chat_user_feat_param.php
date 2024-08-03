<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class LiveChatUserFeatParam extends Migration { public function up() { Schema::table('live_chat_user', function (Blueprint $S_2ik) { $S_2ik->string('param', 100)->nullable()->comment('入口参数'); }); } public function down() { } }