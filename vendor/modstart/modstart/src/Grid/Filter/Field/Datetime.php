<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; class Datetime extends AbstractFilterField { protected $quickSelect = array(); protected function setup() { $this->addFluentAttributeVariable('quickSelect'); } public function quickSelect($vapA6 = array()) { goto iiBM3; GUnbN: return $this; goto bKfF3; XtoCB: if (count($vapA6) == 0) { $vapA6 = array(array('label' => L('Today'), 'min' => date('Y-m-d 00:00:00'), 'max' => date('Y-m-d 23:59:59')), array('label' => L('Yesterday'), 'min' => date('Y-m-d 00:00:00', strtotime('-1 day')), 'max' => date('Y-m-d 23:59:59', strtotime('-1 day')))); } goto o23WI; iiBM3: if (null === $vapA6) { return $this->quickSelect; } goto XtoCB; o23WI: $this->quickSelect = $vapA6; goto GUnbN; bKfF3: } }