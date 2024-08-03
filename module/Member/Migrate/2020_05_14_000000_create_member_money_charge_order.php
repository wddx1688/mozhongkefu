<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberMoneyChargeOrder extends Migration { public function up() { Schema::create('member_money_charge_order', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('memberUserId')->nullable()->comment('排序'); $S_2ik->decimal('money', 20, 2)->nullable()->comment(''); $S_2ik->tinyInteger('status')->nullable()->comment('默认'); $S_2ik->index(array('memberUserId')); $S_2ik->index(array('created_at')); }); } public function down() { } }