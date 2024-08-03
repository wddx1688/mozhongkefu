<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class ModifyDataTempPathLength extends Migration { public function up() { Schema::table('data_temp', function (Blueprint $R3agm) { $R3agm->string('path', 100)->nullable()->comment('')->change(); }); } public function down() { } }