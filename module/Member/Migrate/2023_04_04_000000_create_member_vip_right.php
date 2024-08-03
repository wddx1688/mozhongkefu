<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberVipRight extends Migration { public function up() { Schema::create('member_vip_right', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->string('vipIds', 200)->nullable()->comment('VIPID'); $S_2ik->string('title', 200)->nullable()->comment('标题'); $S_2ik->string('desc', 200)->nullable()->comment('描述'); $S_2ik->string('image', 200)->nullable()->comment('图标'); $S_2ik->integer('sort')->nullable()->comment('排序'); }); } public function down() { } }