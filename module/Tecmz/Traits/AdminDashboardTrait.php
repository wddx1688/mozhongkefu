<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Tecmz\Traits; use ModStart\Admin\Layout\AdminPage; use ModStart\Admin\Widget\SecurityTooltipBox; use ModStart\Layout\Row; use Module\AdminManager\Widget\ServerInfoWidget; use Module\Tecmz\Widget\CopyrightWidget; use Module\Vendor\Admin\Widget\AdminWidgetDashboard; trait AdminDashboardTrait { public function dashboard() { goto CnE5o; RBJQ_: $ZkvUG->append(new Row(function (Row $sDTP5) { AdminWidgetDashboard::callIcon($sDTP5); })); goto Rr3ji; amCq2: $ZkvUG->append(new CopyrightWidget()); goto bGQLS; Rr3ji: AdminWidgetDashboard::call($ZkvUG); goto amCq2; h2V41: return $ZkvUG; goto qiaG1; L8RC2: $ZkvUG->row(new SecurityTooltipBox()); goto RBJQ_; eoc2D: $ZkvUG->pageTitle(L('Dashboard')); goto L8RC2; CnE5o: $ZkvUG = app(AdminPage::class); goto eoc2D; bGQLS: $ZkvUG->append(new ServerInfoWidget()); goto h2V41; qiaG1: } }