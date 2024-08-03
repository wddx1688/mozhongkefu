<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Provider; abstract class AbstractAdminRoleConfigProvider { public abstract function name(); public abstract function title(); public abstract function renderForm($DUr2V, $kKcR8 = array()); public abstract function renderDetail($DUr2V, $kKcR8 = array()); public function renderGrid($DUr2V, $kKcR8 = array()) { return $this->renderDetail($DUr2V, $kKcR8); } public abstract function saved($DUr2V, $kKcR8 = array()); public abstract function deleted($DUr2V, $kKcR8 = array()); }