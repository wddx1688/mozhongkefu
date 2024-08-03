<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Model; use Illuminate\Database\Eloquent\Model; class AdminLog extends Model { protected $table = 'admin_log'; public function data() { return self::hasOne(AdminLogData::class, 'id', 'id'); } protected static function boot() { parent::boot(); static::deleting(function (AdminLog $Wa8N4) { $Wa8N4->data()->delete(); }); } }