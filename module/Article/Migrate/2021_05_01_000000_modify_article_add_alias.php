<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class ModifyArticleAddAlias extends Migration { public function up() { Schema::table('article', function (Blueprint $S_2ik) { $S_2ik->string('alias', 50)->nullable()->comment(''); $S_2ik->index('alias'); }); } public function down() { } }