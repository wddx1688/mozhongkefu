<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Core\Input\Response; class WidgetIconController extends Controller { public static $PermitMethodMap = array('*' => '*'); public function index() { goto LGRk2; raXVy: return Response::jsonSuccessData($f6mzQ); goto dufrw; xfPe7: if (file_exists($n8fWJ = public_path('asset/vendor/iconfont/iconfont.css')) && ($n3GvS = file_get_contents($n8fWJ))) { preg_match_all('/\\.icon-([a-z0-9\\-]+):before/', $n3GvS, $rGUSQ); $ZqYpj = array_map(function ($xy3eh) { return array('title' => $xy3eh, 'cls' => "iconfont icon-{$xy3eh}"); }, $rGUSQ[1]); } goto nDeMh; on8w8: $ZqYpj = array(); goto AJ4Z4; qB2Jg: $f6mzQ[] = array('name' => 'font-awesome', 'title' => 'Font Awesome', 'list' => $ZqYpj); goto raXVy; LGRk2: $f6mzQ = array(); goto owjGh; AJ4Z4: if (file_exists($n8fWJ = public_path('asset/font-awesome/css/font-awesome.min.css')) && ($n3GvS = file_get_contents($n8fWJ))) { preg_match_all('/\\.fa-([a-z0-9\\-]+):before/', $n3GvS, $rGUSQ); $ZqYpj = array_map(function ($xy3eh) { return array('title' => $xy3eh, 'cls' => "fa fa-{$xy3eh}"); }, $rGUSQ[1]); } goto qB2Jg; owjGh: $ZqYpj = array(); goto xfPe7; nDeMh: $f6mzQ[] = array('name' => 'iconfont', 'title' => '内置图标', 'list' => $ZqYpj); goto on8w8; dufrw: } }