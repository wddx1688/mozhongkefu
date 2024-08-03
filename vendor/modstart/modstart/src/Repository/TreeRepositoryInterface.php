<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use Illuminate\Support\Collection; use ModStart\Form\Form; use ModStart\Grid\Model; interface TreeRepositoryInterface { public function getKeyName(); public function getTreePidColumn(); public function getTreeTitleColumn(); public function getTreeSortColumn(); public function getTreeItems($bzZJF); }