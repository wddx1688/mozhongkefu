<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class ModifyDataDriver extends Migration { public function up() { Schema::table('data', function (Blueprint $R3agm) { $R3agm->string('driver', 16)->nullable()->comment('大类'); $R3agm->string('domain', 100)->nullable()->comment('域名'); }); } public function down() { } }