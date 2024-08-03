<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository\Filter; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class RepositoryFilter { private $queries; public function __construct() { $this->queries = new Collection(); } public function clear() { $this->queries = new Collection(); return $this; } public function executeQueries(&$IpOIw) { $this->queries->each(function ($VuXfH) use(&$IpOIw) { $IpOIw = call_user_func_array(array($IpOIw, $VuXfH['method']), $VuXfH['arguments'] ? $VuXfH['arguments'] : array()); }); } public function __call($lrQvV, $wnXyT) { $this->queries->push(array('method' => $lrQvV, 'arguments' => $wnXyT)); return $this; } }