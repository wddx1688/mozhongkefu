<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Concern; use ModStart\Admin\Layout\AdminDialogPage; use ModStart\Admin\Layout\AdminPage; use ModStart\Core\Input\Request; use ModStart\Core\Util\CRUDUtil; use ModStart\Grid\Grid; trait HasAdminGrid { public $registerGridClass = null; public $gridPageLayout = 'default'; public $gridPageUrlParam = array(); private function computeTitleGrid($vfeCQ, $DI8P_) { $iqgWB = $vfeCQ ? $vfeCQ . ' ' . L($DI8P_) : L($DI8P_); return isset($this->pageTitle) ? $this->pageTitle : $iqgWB; } public function useGridDialogPage() { $this->gridPageLayout = 'dialog'; } public function setGridPageUrlParam($kKcR8) { $this->gridPageUrlParam = $kKcR8; } public function index() { goto ljNpr; dIE8N: CRUDUtil::registerGridResource($h7Rk_, $this->registerGridClass ? $this->registerGridClass : '\\' . __CLASS__, $kKcR8); goto Z_AOD; ljNpr: switch ($this->gridPageLayout) { case 'dialog': $mZ5xK = app(AdminDialogPage::class); break; default: $mZ5xK = app(AdminPage::class); break; } goto J7XEM; HS34h: $QKZDs = $h7Rk_->title(); goto Xgwjx; J7XEM: $h7Rk_ = $this->grid(); goto nnbnb; Xgwjx: if (null === $QKZDs) { $QKZDs = $this->computeTitleGrid($h7Rk_->title(), 'List'); } goto Lstyq; Lstyq: return $mZ5xK->pageTitle($QKZDs)->body($h7Rk_); goto xJVK6; Z_AOD: if (Request::isPost()) { return $h7Rk_->request(); } goto HS34h; nnbnb: $kKcR8 = array_merge($this->gridPageUrlParam, $h7Rk_->scopeParam()); goto dIE8N; xJVK6: } }