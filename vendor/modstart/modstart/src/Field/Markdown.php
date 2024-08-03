<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; class Markdown extends AbstractField { protected $listable = false; protected static $js = array('asset/common/editorMarkdown.js'); protected static $css = array(); }