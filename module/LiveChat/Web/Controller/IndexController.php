<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Web\Controller; use ModStart\Module\ModuleBaseController; class IndexController extends ModuleBaseController { public function index() { return $this->view('liveChat.index'); } }