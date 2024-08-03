<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberVipOrder extends Migration { public function up() { Schema::create('member_vip_order', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('memberUserId')->nullable()->comment('排序'); $S_2ik->integer('vipId')->nullable()->comment(''); $S_2ik->decimal('payFee', 20, 2)->nullable()->comment(''); $S_2ik->tinyInteger('status')->nullable()->comment('默认'); $S_2ik->date('expire')->nullable()->comment(''); $S_2ik->string('type', 20)->nullable()->comment(''); }); } public function down() { } }