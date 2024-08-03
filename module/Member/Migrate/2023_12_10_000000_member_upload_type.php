<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class MemberUploadType extends Migration { public function up() { Schema::table('member_upload', function (Blueprint $S_2ik) { $S_2ik->tinyInteger('type')->nullable()->comment('类型'); }); \ModStart\Core\Dao\ModelUtil::updateAll('member_upload', array('type' => \ModStart\Admin\Type\UploadType::USER)); } public function down() { } }