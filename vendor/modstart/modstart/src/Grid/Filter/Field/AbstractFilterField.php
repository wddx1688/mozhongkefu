<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; use ModStart\Grid\Filter\AbstractFilter; use ModStart\Support\Concern\HasFluentAttribute; abstract class AbstractFilterField { use HasFluentAttribute; private $fluentAttributes = array(); protected $label = ''; private $filter; public function __construct(AbstractFilter $AKg7l) { $this->filter = $AKg7l; $this->setup(); } protected function setup() { } public function label($VuXfH = null) { goto UfDOk; sz1W_: return $this; goto gE8eq; PuuI0: $this->label = $VuXfH; goto sz1W_; UfDOk: if (is_null($VuXfH)) { return $this->label; } goto PuuI0; gE8eq: } public function variables() { goto QFoIQ; ItvTc: return $XkA0X; goto xiL1z; Ftgzj: foreach ($this->fluentAttributes as $dKmL2) { $XkA0X[$dKmL2] = $this->{$dKmL2}; } goto ItvTc; QFoIQ: $XkA0X = array(); goto Ftgzj; xiL1z: } public function __call($lrQvV, $wnXyT) { if ($this->isFluentAttribute($lrQvV)) { return $this->fluentAttribute($lrQvV, $wnXyT); } throw new \Exception('AbstractFilterField __call error : ' . $lrQvV); } }