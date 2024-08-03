<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberMessage extends Migration { public function up() { if (!\ModStart\Core\Dao\ModelManageUtil::hasTable('member_message')) { Schema::create('member_message', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('userId')->comment('用户ID')->nullable(); $S_2ik->tinyInteger('status')->comment('1未读 2已读')->nullable(); $S_2ik->integer('fromId')->comment('来源用户ID')->nullable(); $S_2ik->text('content')->comment('消息内容(html)')->nullable(); $S_2ik->index(array('userId', 'status')); }); } } public function down() { } }