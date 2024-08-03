<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\QuickRun\Crawl; interface BaseQueue { function prepend($I6NQU, $uZEpM = array(), $vWdBd = null); function append($I6NQU, $uZEpM = array(), $vWdBd = null); function exists($vWdBd); function size(); function poll(); }