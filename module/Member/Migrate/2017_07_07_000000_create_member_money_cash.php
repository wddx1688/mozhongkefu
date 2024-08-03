<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberMoneyCash extends Migration { public function up() { Schema::create('member_money_cash', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('memberUserId')->nullable()->comment('用户ID'); $S_2ik->tinyInteger('status')->nullable()->comment('状态'); $S_2ik->decimal('money', 20, 2)->nullable()->comment('金额'); $S_2ik->decimal('moneyAfterTax', 20, 2)->nullable()->comment('实际到账'); $S_2ik->string('remark', 100)->nullable()->comment('备注'); $S_2ik->tinyInteger('type')->nullable()->comment('提现账号类型'); $S_2ik->string('realname', 50)->nullable()->comment('提现账号姓名'); $S_2ik->string('account', 200)->nullable()->comment('提现账号'); $S_2ik->index(array('memberUserId')); }); } public function down() { } }