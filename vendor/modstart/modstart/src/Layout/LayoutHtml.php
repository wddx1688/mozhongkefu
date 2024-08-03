<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Layout; use ModStart\Core\Util\IdUtil; use ModStart\Field\AbstractField; class LayoutHtml extends AbstractField { protected $isLayoutField = true; protected $view = 'modstart::core.field.layoutHtml'; public function __construct($ueQYS) { parent::__construct(IdUtil::generate('LayoutHtml'), array($ueQYS)); } }