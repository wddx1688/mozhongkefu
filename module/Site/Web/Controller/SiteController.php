<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Site\Web\Controller; use ModStart\Core\Input\InputPackage; use ModStart\Module\ModuleBaseController; class SiteController extends ModuleBaseController { public function contact() { goto ulbs5; JMneY: $m2Av0 = $ErQts->getBoolean('dialog'); goto HwAEc; ulbs5: $ErQts = InputPackage::buildFromInput(); goto JMneY; hU9rE: if ($m2Av0) { $tURZC = 'site.contactDialog'; $this->shareDialogPageViewFrame(); } goto LjSgc; LjSgc: return $this->view($tURZC); goto yLjBB; HwAEc: $tURZC = 'site.contact'; goto hU9rE; yLjBB: } }