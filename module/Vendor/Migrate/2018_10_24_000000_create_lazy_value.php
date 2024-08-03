<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateLazyValue extends Migration { public function up() { Schema::create('lazy_value', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('key', 50)->nullable()->comment(''); $S_2ik->string('param', 100)->nullable()->comment(''); $S_2ik->integer('expire')->nullable()->comment(''); $S_2ik->integer('lifeExpire')->nullable()->comment(''); $S_2ik->integer('cacheSeconds')->nullable()->comment(''); $S_2ik->text('value')->nullable()->comment(''); $S_2ik->unique(array('key', 'param')); $S_2ik->index(array('expire')); $S_2ik->index(array('lifeExpire')); }); } public function down() { } }