<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class NavNavIcon extends Migration { public function up() { Schema::table('nav', function (Blueprint $S_2ik) { $S_2ik->string('icon', 50)->nullable()->comment('图标'); }); } public function down() { } }