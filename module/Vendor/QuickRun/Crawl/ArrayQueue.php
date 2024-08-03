<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Crawl; class ArrayQueue implements BaseQueue { private $data = array(); function prepend($I6NQU, $uZEpM = array(), $vWdBd = null) { array_unshift($this->data, array('id' => $vWdBd, 'handler' => $I6NQU, 'param' => $uZEpM)); } function append($I6NQU, $uZEpM = array(), $vWdBd = null) { array_push($this->data, array('id' => $vWdBd, 'handler' => $I6NQU, 'param' => $uZEpM)); } function exists($vWdBd) { foreach ($this->data as $AVLNU) { if ($AVLNU['id'] == $vWdBd) { return true; } } return false; } function size() { return count($this->data); } function poll() { return array_shift($this->data); } }