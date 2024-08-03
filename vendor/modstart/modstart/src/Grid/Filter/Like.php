<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter; use ModStart\Core\Util\StrUtil; class Like extends AbstractFilter { private $handle = null; public function condition($SPnSA) { if (isset($SPnSA['like']) && $SPnSA['like'] !== '') { if (!empty($this->handle)) { return call_user_func_array($this->handle, array($SPnSA['like'])); } else { return $this->buildCondition($this->column, 'like', "%{$SPnSA['like']}%"); } } return null; } public function handle(\Closure $hB9j0) { $this->handle = $hB9j0; } public function wordSplit() { $this->handle = function ($qLyBy) { return array(array('where' => array(function ($IpOIw) use($qLyBy) { $YkA9c = StrUtil::wordSplit($qLyBy); foreach ($YkA9c as $RfXiF) { $IpOIw->where($this->column, 'like', '%' . $RfXiF . '%'); } }))); }; } }