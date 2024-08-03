<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberDataStatistic extends Migration { public function up() { Schema::create('member_data_statistic', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('sizeLimit')->nullable()->comment(''); $S_2ik->bigInteger('sizeUsed')->nullable()->comment(''); }); } public function down() { } }