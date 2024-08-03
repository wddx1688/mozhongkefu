<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Concern; use ModStart\Admin\Layout\AdminDialogPage; use ModStart\Core\Util\CRUDUtil; trait HasAdminDetail { private function computeTitleDetail($vfeCQ, $DI8P_) { $iqgWB = $vfeCQ ? $vfeCQ . ' ' . L($DI8P_) : L($DI8P_); return isset($this->pageTitle) ? $this->pageTitle : $iqgWB; } public function show(AdminDialogPage $mZ5xK) { $LT01t = $this->detail(); return $mZ5xK->pageTitle($this->computeTitleDetail($LT01t->title(), 'Show'))->body($LT01t->show(CRUDUtil::id())); } }