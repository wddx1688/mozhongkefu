<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Api\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Core\Input\Response; use ModStart\Module\ModuleBaseController; use Module\Article\Util\ArticleUtil; class ArticleController extends ModuleBaseController { public function get() { goto uJ8wv; HnPoq: return Response::generateSuccessData(array('article' => $yWi_I)); goto kFB6K; V_r_9: $vWdBd = $ErQts->getTrimString('id'); goto ENO90; uJ8wv: $ErQts = InputPackage::buildFromInput(); goto V_r_9; ENO90: if (is_numeric($vWdBd)) { $yWi_I = ArticleUtil::get($vWdBd); } else { $yWi_I = ArticleUtil::getByAlias($vWdBd); } goto HnPoq; kFB6K: } }