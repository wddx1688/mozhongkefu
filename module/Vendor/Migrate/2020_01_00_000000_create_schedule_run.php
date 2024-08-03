<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use ModStart\Core\Dao\ModelManageUtil; class CreateScheduleRun extends Migration { public function up() { Schema::create('schedule_run', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->string('name', 200)->nullable()->comment(''); $S_2ik->dateTime('startTime')->nullable()->comment(''); $S_2ik->dateTime('endTime')->nullable()->comment(''); $S_2ik->tinyInteger('status')->nullable()->comment(''); $S_2ik->string('result', 200)->nullable()->comment(''); $S_2ik->index('created_at'); }); } public function down() { } }