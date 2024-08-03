<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberVip extends Migration { public function up() { Schema::table('member_user', function (Blueprint $S_2ik) { $S_2ik->integer('vipId')->nullable()->comment(''); $S_2ik->date('vipExpire')->nullable()->comment(''); }); Schema::create('member_vip_set', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('title', 50)->nullable()->comment('名称'); $S_2ik->string('flag', 50)->nullable()->comment('标识'); $S_2ik->integer('pid')->nullable()->comment('排序'); $S_2ik->integer('sort')->nullable()->comment('排序'); $S_2ik->tinyInteger('isDefault')->nullable()->comment('默认'); $S_2ik->string('icon', 100)->nullable()->comment('图标'); $S_2ik->decimal('price', 20, 2)->nullable()->comment(''); $S_2ik->integer('vipDays')->nullable()->comment(''); $S_2ik->text('content')->nullable()->comment('说明'); }); } public function down() { } }