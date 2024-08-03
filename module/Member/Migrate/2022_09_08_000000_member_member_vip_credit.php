<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class MemberMemberVipCredit extends Migration { public function up() { Schema::table('member_vip_set', function (Blueprint $S_2ik) { $S_2ik->tinyInteger('creditPresentEnable')->nullable()->comment(''); $S_2ik->integer('creditPresentValue')->nullable()->comment(''); }); } public function down() { } }