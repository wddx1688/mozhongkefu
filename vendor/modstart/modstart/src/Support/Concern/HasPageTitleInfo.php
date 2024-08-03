<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasPageTitleInfo { protected $pageTitle; protected $pageKeywords; protected $pageDescription; public function pageTitle($yFWLi = null) { goto mmBv0; l2Evj: return $this; goto afwfv; iSTow: $this->pageTitle = $yFWLi; goto l2Evj; mmBv0: if (null === $yFWLi) { return $this->pageTitle; } goto iSTow; afwfv: } public function pageKeywords($yFWLi = null) { goto ctSbk; Hl047: $this->pageKeywords = $yFWLi; goto g2HYN; g2HYN: return $this; goto CnLa1; ctSbk: if (null === $yFWLi) { return $this->pageKeywords; } goto Hl047; CnLa1: } public function pageDescription($yFWLi = null) { goto g4afT; kupcS: return $this; goto S2mPO; g4afT: if (null === $yFWLi) { return $this->pageDescription; } goto JtHtm; JtHtm: $this->pageDescription = $yFWLi; goto kupcS; S2mPO: } }