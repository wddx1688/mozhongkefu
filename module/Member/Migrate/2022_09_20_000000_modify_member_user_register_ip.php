<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class ModifyMemberUserRegisterIp extends Migration { public function up() { Schema::table('member_user', function (Blueprint $S_2ik) { $S_2ik->string('registerIp', 20)->nullable()->comment('注册IP'); }); } public function down() { } }