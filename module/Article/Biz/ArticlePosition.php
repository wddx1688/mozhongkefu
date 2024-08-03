<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Article\Biz; class ArticlePosition extends AbstractArticlePositionBiz { private $name; private $title; public static function make($rfBQu, $xy3eh) { goto UnOxh; KrDbE: return $Fay2L; goto A0vmg; DejGd: $Fay2L->title = $xy3eh; goto KrDbE; FETwo: $Fay2L->name = $rfBQu; goto DejGd; UnOxh: $Fay2L = new static(); goto FETwo; A0vmg: } public function name() { return $this->name; } public function title() { return $this->title; } }