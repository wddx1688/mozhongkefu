<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Web\Controller; use ModStart\Core\Input\Response; use ModStart\Core\Util\ArrayUtil; use ModStart\Module\ModuleBaseController; use Module\Article\Util\ArticleUtil; class ArticleController extends ModuleBaseController { public function views($vWdBd) { goto TyEMq; K8JVt: $tURZC = 'article.view'; goto ywbaP; TyEMq: if (is_numeric($vWdBd)) { $yWi_I = ArticleUtil::get($vWdBd); } else { $yWi_I = ArticleUtil::getByAlias($vWdBd); } goto CSdpg; ywbaP: if ($yWi_I['position'] == 'page' || empty($yWi_I['position'])) { $tURZC = 'article.viewPage'; } goto nAHuW; nAHuW: return $this->view($tURZC, array('article' => $yWi_I)); goto QK8cl; CSdpg: if (empty($yWi_I)) { return Response::page404(); } goto K8JVt; QK8cl: } }