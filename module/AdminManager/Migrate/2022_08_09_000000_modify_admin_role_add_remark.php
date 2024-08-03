<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class ModifyAdminRoleAddRemark extends Migration { public function up() { $eq9bT = config('modstart.admin.database.connection') ?: config('database.default'); Schema::connection($eq9bT)->table('admin_role', function (Blueprint $S_2ik) { $S_2ik->string('remark', 400)->comment('')->nullable(); }); } public function down() { } }