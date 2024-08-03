<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use ModStart\Form\Form; interface SortRepositoryInterface { public function getKeyName(); public function getSortColumn(); public function sortEdit(Form $c9K5c); }