<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberAddress extends Migration { public function up() { Schema::create('member_address', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->integer('userId')->nullable()->comment('用户ID'); $S_2ik->string('name', 20)->nullable()->comment('姓名'); $S_2ik->string('phone', 20)->nullable()->comment('手机号'); $S_2ik->string('area', 100)->nullable()->comment('省市地区'); $S_2ik->string('detail', 200)->nullable()->comment('详细地址'); $S_2ik->string('post', 20)->nullable()->comment('邮政编码'); $S_2ik->tinyInteger('isDefault')->nullable()->comment('默认'); $S_2ik->index(array('userId')); }); } public function down() { } }