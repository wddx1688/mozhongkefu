<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class MemberCard extends Migration { public function up() { Schema::create('member_card', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('memberUserId')->nullable()->comment('用户ID'); $S_2ik->string('biz', 20)->nullable()->comment('业务'); $S_2ik->dateTime('expire')->nullable()->comment('到期时间'); $S_2ik->bigInteger('quotaUsed')->nullable()->comment('使用额度'); $S_2ik->bigInteger('quotaTotal')->nullable()->comment('总额度'); $S_2ik->index(array('memberUserId', 'biz')); }); } public function down() { } }