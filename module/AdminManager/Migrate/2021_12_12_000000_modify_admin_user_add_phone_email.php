<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; class ModifyAdminUserAddPhoneEmail extends Migration { public function up() { $eq9bT = config('modstart.admin.database.connection') ?: config('database.default'); Schema::connection($eq9bT)->table('admin_user', function (Blueprint $S_2ik) { $S_2ik->string('phone', 11)->comment('')->nullable(); $S_2ik->string('email', 100)->comment('')->nullable(); $S_2ik->unique('phone'); $S_2ik->unique('email'); }); } public function down() { } }