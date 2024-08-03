<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Model; use Illuminate\Database\Eloquent\Model; class AdminRole extends Model { protected $table = 'admin_role'; public function users() { return $this->belongsToMany(AdminUser::class, 'admin_user_role', 'roleId', 'userId'); } public function rules() { return $this->hasMany(AdminRoleRule::class, 'roleId', 'id'); } protected static function boot() { parent::boot(); static::deleting(function (AdminRole $Wa8N4) { $Wa8N4->rules()->delete(); }); } }