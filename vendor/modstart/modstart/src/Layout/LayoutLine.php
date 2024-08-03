<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Layout; use ModStart\Core\Util\IdUtil; use ModStart\Field\AbstractField; class LayoutLine extends AbstractField { protected $isLayoutField = true; private $layoutClosure = null; public function __construct($iqgWB, $wnXyT = array()) { goto rAcHB; KWQ_a: $this->layoutClosure = $wnXyT[0]; goto aGvAI; rAcHB: parent::__construct(IdUtil::generate('LayoutPanel')); goto r10BM; r10BM: $this->label = $iqgWB; goto KWQ_a; aGvAI: } public function postSetup() { goto fxlwe; k0aAE: $this->context->html($this->column() . '_end')->html('</div></div>')->plain(); goto EDEyb; fxlwe: $this->context->html($this->column() . '_start')->html('<div class="line"><div class="label">' . $this->label . ':</div><div class="field">')->plain(); goto pCYGS; pCYGS: call_user_func($this->layoutClosure, $this->context()); goto k0aAE; EDEyb: } public function render() { return ''; } }