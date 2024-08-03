<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Dao\ModelManageUtil; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\TreeUtil; use ModStart\Module\ModuleManager; use Module\Vendor\Admin\Widget\AdminWidgetLink; use Module\Vendor\Type\AdminWidgetLinkType; class WidgetLinkController extends Controller { public static $PermitMethodMap = array('*' => '*'); public function select() { goto bq_gN; WBh5G: $YZXT9 = array(); goto pRDa0; GrHZ4: return view('modstart::admin.dialog.linkSelector', array('types' => $YZXT9, 'links' => $jlLbw)); goto WKt7j; bq_gN: $jlLbw = AdminWidgetLink::get(); goto WBh5G; pRDa0: foreach (AdminWidgetLinkType::getList() as $rfBQu => $xy3eh) { goto kz80t; JRnKi: $YZXT9[] = array('name' => $rfBQu, 'title' => $xy3eh, 'count' => $bWr4T, 'icon' => AdminWidgetLinkType::icon($rfBQu)); goto OosyR; kz80t: $bWr4T = count(array_filter($jlLbw, function ($kL49b) use($rfBQu) { return $kL49b['type'] == $rfBQu; })); goto ktWBU; ktWBU: if ($bWr4T <= 0) { continue; } goto JRnKi; OosyR: } goto GrHZ4; WKt7j: } }