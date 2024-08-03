<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class CreateMemberDeleteTable extends Migration { public function up() { goto JndyF; xmVPx: Schema::create('member_deleted', function (Blueprint $S_2ik) { $S_2ik->increments('id'); $S_2ik->timestamps(); $S_2ik->string('username', 50)->nullable()->comment('用户名'); $S_2ik->string('phone', 20)->nullable()->comment('手机'); $S_2ik->string('email', 200)->nullable()->comment('邮箱'); $S_2ik->text('content')->comment('其他数据'); }); goto fuEZL; fuEZL: \ModStart\Core\Dao\ModelUtil::updateAll('member_user', array('isDeleted' => false)); goto EbTUT; JndyF: Schema::table('member_user', function (Blueprint $S_2ik) { $S_2ik->bigInteger('deleteAtTime')->nullable()->comment('已删除'); $S_2ik->tinyInteger('isDeleted')->nullable()->comment('已删除'); $S_2ik->index(array('deleteAtTime')); }); goto xmVPx; EbTUT: } public function down() { } }