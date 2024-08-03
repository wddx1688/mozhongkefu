<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Traits; use ModStart\Admin\Layout\AdminPage; use ModStart\Admin\Widget\SecurityTooltipBox; use ModStart\Layout\Row; use Module\AdminManager\Widget\ServerInfoWidget; use Module\Vendor\Admin\Widget\AdminWidgetDashboard; trait AdminDashboardTrait { public function dashboard() { goto x7pN6; x7pN6: $ZkvUG = app(AdminPage::class); goto Uxq0w; FVXpD: $ZkvUG->row(new SecurityTooltipBox()); goto De2sP; YYk8N: AdminWidgetDashboard::call($ZkvUG); goto wliPr; FiYkp: return $ZkvUG; goto FjZRD; wliPr: $ZkvUG->append(new ServerInfoWidget()); goto FiYkp; Uxq0w: $ZkvUG->pageTitle(L('Dashboard')); goto FVXpD; De2sP: $ZkvUG->append(new Row(function (Row $sDTP5) { AdminWidgetDashboard::callIcon($sDTP5); })); goto YYk8N; FjZRD: } }