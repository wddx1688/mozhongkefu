<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberMeta extends Migration { public function up() { Schema::create('member_meta', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('memberUserId')->comment('')->nullable(); $S_2ik->string('name', 30)->comment('')->nullable(); $S_2ik->string('value', 1000)->comment('')->nullable(); $S_2ik->unique(array('memberUserId', 'name')); }); } public function down() { } }