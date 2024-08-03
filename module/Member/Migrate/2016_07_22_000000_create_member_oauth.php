<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberOauth extends Migration { public function up() { Schema::create('member_oauth', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('memberUserId')->comment('用户ID')->nullable(); $S_2ik->string('type', 30)->comment('类型')->nullable(); $S_2ik->string('openId', 150)->comment('OpenId')->nullable(); $S_2ik->unique(array('type', 'openId')); $S_2ik->index(array('memberUserId')); }); } public function down() { } }