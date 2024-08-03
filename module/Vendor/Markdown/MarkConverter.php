<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Markdown; use League\CommonMark\CommonMarkConverter; use League\CommonMark\Environment; use Webuni\CommonMark\TableExtension\TableExtension; class MarkConverter extends CommonMarkConverter { public function __construct(array $ts2Yv = array(), Environment $EcPs9 = null) { goto hy3Gx; ExMzG: parent::__construct($ts2Yv, $EcPs9); goto y3k4E; hy3Gx: $EcPs9 = Environment::createCommonMarkEnvironment(); goto FEtIs; FEtIs: $EcPs9->addExtension(new TableExtension()); goto ExMzG; y3k4E: } }