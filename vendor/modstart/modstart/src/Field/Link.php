<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Link extends AbstractField { protected function setup() { $this->addVariables(array('server' => modstart_admin_url('widget/link_select'))); } public function server($HCA_O) { $this->addVariables(array('server' => $HCA_O)); return $this; } }