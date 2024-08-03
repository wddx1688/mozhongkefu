<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid; use Illuminate\Contracts\Support\Renderable; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class GridFilterScope implements Renderable { protected $filter; public $key = ''; protected $label = ''; protected $queries; public function __construct(GridFilter $AKg7l, $cANPj = 'fixed', $ueQYS = '') { goto UnS6p; c6cgr: $this->queries = new Collection(); goto KxpQX; dUwPz: $this->label = $ueQYS ? $ueQYS : $cANPj; goto c6cgr; UnS6p: $this->filter = $AKg7l; goto ROpyn; ROpyn: $this->key = $cANPj; goto dUwPz; KxpQX: } public function condition() { return $this->queries->map(function ($IpOIw) { return array($IpOIw['method'] => $IpOIw['arguments']); })->toArray(); } public function render() { return ''; } public function __call($lrQvV, $wnXyT) { $this->queries->push(array('method' => $lrQvV, 'arguments' => $wnXyT)); return $this; } }