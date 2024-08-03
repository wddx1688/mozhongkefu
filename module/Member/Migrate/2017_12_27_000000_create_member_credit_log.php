<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberCreditLog extends Migration { public function up() { Schema::create('member_credit_log', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('memberUserId')->nullable()->comment('用户ID'); $S_2ik->integer('change')->nullable()->comment('金额'); $S_2ik->string('remark', 100)->nullable()->comment('备注'); $S_2ik->index(array('memberUserId')); }); } public function down() { } }