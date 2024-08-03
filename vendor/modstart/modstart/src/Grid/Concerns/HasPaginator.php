<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Concerns; trait HasPaginator { public function enablePagination($VjQ3H = false) { goto FE1a3; Vth9i: return $this; goto r0kgs; hLAT2: $this->setFluentAttribute('enablePagination', $VjQ3H); goto Vth9i; FE1a3: $this->model->usePaginate($VjQ3H); goto hLAT2; r0kgs: } }