<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Filter\Field; class GroupTags extends AbstractFilterField { protected $options = array(); protected $serializeType = null; protected function setup() { $this->addFluentAttributeVariable('options'); $this->addFluentAttributeVariable('serializeType'); } }