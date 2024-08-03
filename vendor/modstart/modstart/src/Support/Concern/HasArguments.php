<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasArguments { private $arguments = array(); public function setArgument($HQ4FM, $VuXfH = null) { if (is_array($HQ4FM)) { foreach ($HQ4FM as $dKmL2 => $yFWLi) { $this->arguments[$dKmL2] = $yFWLi; } } else { $this->arguments[$HQ4FM] = $VuXfH; } } public function getArgument($HQ4FM, $RsCDD = null) { return isset($this->arguments[$HQ4FM]) ? $this->arguments[$HQ4FM] : $RsCDD; } }