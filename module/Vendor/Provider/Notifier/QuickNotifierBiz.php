<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Notifier; class QuickNotifierBiz extends AbstractNotifierBiz { private $name; private $title; public function __construct($rfBQu, $xy3eh) { $this->name = $rfBQu; $this->title = $xy3eh; } public function name() { return $this->name; } public function title() { return $this->title; } }