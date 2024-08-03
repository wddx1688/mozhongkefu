<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateImServiceUser extends Migration { public function up() { Schema::create('im_service_user', function (Blueprint $S_2ik) { $S_2ik->bigIncrements('id'); $S_2ik->timestamps(); $S_2ik->bigInteger('serviceId')->nullable()->comment('群ID'); $S_2ik->bigInteger('userId')->nullable()->comment('用户ID'); $S_2ik->unique(array('serviceId', 'userId')); $S_2ik->index(array('userId')); }); } public function down() { } }