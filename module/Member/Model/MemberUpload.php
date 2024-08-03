<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Model; use Illuminate\Database\Eloquent\Model; use ModStart\Admin\Model\Data; class MemberUpload extends Model { protected $table = 'member_upload'; public function data() { return $this->hasOne(Data::class, 'id', 'dataId'); } }