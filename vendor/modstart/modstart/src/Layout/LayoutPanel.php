<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Layout; use ModStart\Core\Util\IdUtil; use ModStart\Field\AbstractField; class LayoutPanel extends AbstractField { protected $isLayoutField = true; private $layoutClosure = null; private $panelTitle; public function __construct($iqgWB, $wnXyT = array()) { goto Jd5CH; Jd5CH: parent::__construct(IdUtil::generate('LayoutPanel')); goto tChWH; tChWH: $this->panelTitle = $iqgWB; goto VhILV; VhILV: $this->layoutClosure = $wnXyT[0]; goto FdXZ9; FdXZ9: } public function postSetup() { goto zqM_6; zqM_6: $this->context->html($this->column() . '_start')->html('<div class="ub-panel"><div class="head"><div class="title">' . $this->panelTitle . '</div></div><div class="body">')->plain(); goto ty23v; c1T5J: $this->context->html($this->column() . '_end')->html('</div></div>')->plain(); goto Ii6GF; ty23v: call_user_func($this->layoutClosure, $this->context()); goto c1T5J; Ii6GF: } public function render() { return ''; } }