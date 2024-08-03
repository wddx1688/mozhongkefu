<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Model; use Illuminate\Database\Eloquent\Model; class AdminRoleRule extends Model { protected $table = 'admin_role_rule'; protected $fillable = array('rule'); public function rules() { return $this->hasMany(AdminRoleRule::class, 'roleId'); } }