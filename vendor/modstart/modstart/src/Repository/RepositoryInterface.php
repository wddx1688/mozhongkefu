<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Collection; use ModStart\Form\Form; use ModStart\Detail\Detail; use ModStart\Grid\Model; interface RepositoryInterface { public function getKeyName(); public function getCreatedAtColumn(); public function getUpdatedAtColumn(); public function isSoftDeletes(); public function get(Model $Wa8N4); public function add(Form $c9K5c); public function editing(Form $c9K5c); public function edit(Form $c9K5c); public function show(Detail $LT01t); public function deleting(Form $c9K5c); public function delete(Form $c9K5c, Arrayable $uhz5x); }