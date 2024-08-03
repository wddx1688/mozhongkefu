<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class DataAddIndex extends Migration { public function up() { Schema::table('data', function (Blueprint $R3agm) { $R3agm->index(array('category', 'path')); }); } public function down() { } }