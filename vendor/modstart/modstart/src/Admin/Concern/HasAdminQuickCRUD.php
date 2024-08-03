<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Concern; use ModStart\Admin\Layout\AdminCRUDBuilder; trait HasAdminQuickCRUD { use HasAdminCRUD; protected function grid() { goto jYEh3; jYEh3: $GOTEy = new AdminCRUDBuilder(); goto zBNVz; j2okl: return $GOTEy->grid(); goto xw1by; zBNVz: $GOTEy->useModeGrid(); goto mQhFd; mQhFd: $this->crud($GOTEy); goto j2okl; xw1by: } protected function form() { goto nz127; eZYkD: return $GOTEy->form(); goto zrWqZ; nz127: $GOTEy = new AdminCRUDBuilder(); goto C5JG5; lEDf_: $this->crud($GOTEy); goto eZYkD; C5JG5: $GOTEy->useModeForm(); goto lEDf_; zrWqZ: } protected function detail() { goto AOXdW; AOXdW: $GOTEy = new AdminCRUDBuilder(); goto hMHzZ; hMHzZ: $GOTEy->useModeDetail(); goto Le6K2; Le6K2: $this->crud($GOTEy); goto waW81; waW81: return $GOTEy->detail(); goto B4Knm; B4Knm: } }