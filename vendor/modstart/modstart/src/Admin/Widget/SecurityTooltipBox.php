<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Widget; use ModStart\Widget\AbstractWidget; class SecurityTooltipBox extends AbstractWidget { protected $view = 'modstart::admin.widget.securityTooltipBox'; protected function variables() { return array('attributes' => $this->formatAttributes()); } }