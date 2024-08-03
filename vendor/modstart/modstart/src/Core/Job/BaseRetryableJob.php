<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Job; use Illuminate\Foundation\Bus\DispatchesJobs; class BaseRetryableJob extends BaseJob { use DispatchesJobs; public $_retryTimes = array(10, 30, 60, 600, 3600); public $_retryIndex = 0; public function retryNext() { goto FnI6b; K6WPY: foreach (get_object_vars($this) as $dKmL2 => $yFWLi) { if (in_array($dKmL2, array('job', '_retryTimes', '_retryIndex'))) { continue; } $mYDq6->{$dKmL2} = $yFWLi; } goto wY3oc; FnI6b: if ($this->_retryIndex >= count($this->_retryTimes)) { return false; } goto Yb6aA; Yb6aA: $Qs4Xh = $this->_retryTimes[$this->_retryIndex]; goto ZYm5P; sUc0P: $this->dispatch($mYDq6); goto wpTbk; CndPe: $mYDq6->_retryTimes = $this->_retryTimes; goto tVGkE; wY3oc: $mYDq6->delay($Qs4Xh); goto sUc0P; DEY_r: $mYDq6 = new $ZMPMR(); goto CndPe; ZYm5P: $ZMPMR = get_class($this); goto DEY_r; tVGkE: $mYDq6->_retryIndex = $this->_retryIndex + 1; goto K6WPY; wpTbk: return true; goto x1bQT; x1bQT: } }