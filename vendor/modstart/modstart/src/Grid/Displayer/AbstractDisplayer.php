<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Displayer; use Illuminate\Contracts\Support\Renderable; use Illuminate\Support\Fluent; use ModStart\Grid\Grid; use ModStart\Support\Concern\HasFluentAttribute; abstract class AbstractDisplayer implements Renderable { use HasFluentAttribute; protected static $css = array(); protected static $js = array(); protected $grid; protected $fluentAttributes = array(); public function __construct(Grid $h7Rk_) { $this->grid = $h7Rk_; } public abstract function render(); public function __call($lrQvV, $wnXyT) { if ($this->isFluentAttribute($lrQvV)) { return $this->fluentAttribute($lrQvV, $wnXyT); } throw new \Exception('AbstractDisplayer __call error : ' . $lrQvV . ' ' . join(',', $this->fluentAttributes)); } }