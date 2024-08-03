<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Web\Controller; use ModStart\App\Web\Layout\WebPage; use ModStart\Core\Input\Request; use ModStart\Field\AbstractField; use ModStart\Field\AutoRenderedFieldValue; use ModStart\Grid\Grid; use ModStart\Grid\GridFilter; use ModStart\Repository\Filter\RepositoryFilter; use Module\Member\Auth\MemberUser; use Module\Member\Support\MemberLoginCheck; use Module\Member\Util\MemberMoneyUtil; class MemberMoneyCashController extends MemberFrameController implements MemberLoginCheck { private $api; public function __construct(\Module\Member\Api\Controller\MemberMoneyCashController $ZFzMa) { parent::__construct(); $this->api = $ZFzMa; } public function index() { $yOLWI = MemberMoneyUtil::getTotal(MemberUser::id()); return $this->view('memberMoneyCash.index', array('pageTitle' => '钱包提现', 'total' => $yOLWI)); } public function log(WebPage $ZkvUG) { goto PTYEZ; WE_r9: list($tURZC, $HdyS4) = $this->viewPaths('memberMoneyCash.log'); goto xa8zO; LEofJ: $qCqqU->useSimple(function (AbstractField $E9h4W, $AVLNU, $oPu4k) { return AutoRenderedFieldValue::makeView('module::Member.View.pc.memberMoneyCash.logItem', array('item' => $AVLNU)); }); goto kQ1yX; kQ1yX: if (Request::isPost()) { return $qCqqU->request(); } goto WE_r9; F309e: $qCqqU->disableCUD()->disableItemOperate(); goto LEofJ; PTYEZ: $qCqqU = Grid::make('member_money_cash'); goto NiV2T; zXKI8: $qCqqU->gridFilter(function (GridFilter $RryBq) { $RryBq->range('created_at', '时间')->datetime(); }); goto F309e; xa8zO: return $ZkvUG->pageTitle('钱包提现')->view($tURZC)->body($qCqqU); goto d8bYB; NiV2T: $qCqqU->repositoryFilter(function (RepositoryFilter $RryBq) { $RryBq->where(array('memberUserId' => MemberUser::id())); }); goto zXKI8; d8bYB: } }