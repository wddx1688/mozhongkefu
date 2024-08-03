<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateMemberGroup extends Migration { public function up() { goto DCKyY; k75_1: Schema::table('member_user', function (Blueprint $S_2ik) { $S_2ik->integer('groupId')->nullable()->comment(''); }); goto ZVeDr; ZVeDr: \ModStart\Core\Dao\ModelUtil::insertAll('member_group', array(array('title' => '普通用户', 'description' => '', 'isDefault' => true), array('title' => '高级用户', 'description' => '', 'isDefault' => false))); goto Na_gQ; DCKyY: Schema::create('member_group', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('title', 50)->nullable()->comment('名称'); $S_2ik->string('description', 200)->nullable()->comment('描述'); $S_2ik->tinyInteger('isDefault')->nullable()->comment('默认'); }); goto k75_1; Na_gQ: } public function down() { } }