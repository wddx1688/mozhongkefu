<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Displayer; use Illuminate\Database\Eloquent\Model; use Illuminate\Support\Facades\View; use ModStart\Field\AbstractField; use ModStart\Widget\TextAction; use ModStart\Widget\TextLink; class ItemOperate extends AbstractDisplayer { protected $field; protected $item; protected $index; protected $canShow; protected $canEdit; protected $canDelete; protected $canSort; protected $canCopy; protected $operates = array(); protected $onlyOperate = null; protected $prependOperates = array(); protected $appendOperates = array(); protected $fluentAttributes = array('item', 'index', 'canShow', 'canEdit', 'canDelete', 'canSort', 'canCopy'); public function reset() { goto E0bs4; YF4yk: $this->canEdit = $this->grid->canEdit(); goto kyigv; rHIQ3: $this->canCopy = $this->grid->canCopy() && $this->grid->canAdd(); goto KfJVh; YkWIw: $this->canSort = $this->grid->canSort(); goto rHIQ3; BDoP4: return $this; goto bcIbK; KfJVh: $this->resetOperates(); goto BDoP4; d7qw3: $this->index = null; goto grOsL; kyigv: $this->canDelete = $this->grid->canDelete(); goto YkWIw; E0bs4: $this->item = null; goto d7qw3; grOsL: $this->canShow = $this->grid->canShow(); goto YF4yk; bcIbK: } public function setField($dBa7F) { $this->field = $dBa7F; } public function getField() { return $this->field; } public function resetOperates() { goto NVPer; NVPer: $this->onlyOperate = null; goto nY8W3; nY8W3: $this->prependOperates = array(); goto KX02t; KX02t: $this->appendOperates = array(); goto BsbM5; BsbM5: } public function only($huBO3) { $this->onlyOperate = $huBO3; return $this; } public function push($huBO3) { $this->appendOperates[] = $huBO3; return $this; } public function prepend($huBO3) { if (is_array($huBO3)) { $this->prependOperates = array_merge($huBO3, $this->prependOperates); } else { $this->prependOperates[] = $huBO3; } } public function render() { goto IFLtx; C1hta: if ($this->canEdit() && $this->grid->urlEdit()) { goto W3W3V; W3W3V: $alzzZ = $this->grid->textEdit(); goto kJsba; kJsba: if (empty($alzzZ)) { $alzzZ = L('Edit'); } goto TLFND; TLFND: if ($this->grid->editBlankPage()) { $this->operates[] = TextLink::primary($alzzZ, $this->grid->urlEdit() . '?_id=' . $this->item->{$this->grid->getRepositoryKeyName()}, modstart_admin_is_tab() ? 'data-tab-open data-refresh-grid-on-close' : ''); } else { $this->operates[] = TextAction::primary($alzzZ, 'data-edit'); } goto Q7jyq; Q7jyq: } goto M0lYP; IFLtx: if (null !== $this->onlyOperate) { return $this->onlyOperate; } goto l21Y4; M0lYP: if ($this->canDelete() && $this->grid->urlDelete()) { $this->operates[] = TextAction::danger(L('Delete'), 'data-delete'); } goto c_sMX; CUjki: $this->operates = array_merge($this->operates, $this->prependOperates); goto L0RHm; l21Y4: $this->operates = array(); goto CUjki; L87RM: $this->operates = array_merge($this->operates, $this->appendOperates); goto IQ98w; c_sMX: if ($this->canCopy()) { $this->operates[] = TextAction::muted(L('Copy'), 'data-add-button data-add-copy-button'); } goto L87RM; L0RHm: if ($this->canSort() && $this->grid->urlSort()) { goto KG7jz; mIbi0: $this->operates[] = TextAction::primary('<i class="iconfont icon-direction-up"></i>', 'data-sort="up"'); goto AM3P_; AM3P_: $this->operates[] = TextAction::primary('<i class="iconfont icon-direction-down"></i>', 'data-sort="down"'); goto PBLUN; PBLUN: $this->operates[] = TextAction::primary('<i class="iconfont icon-bottom"></i>', 'data-sort="bottom"'); goto ce1aV; KG7jz: $this->operates[] = TextAction::primary('<i class="iconfont icon-top"></i>', 'data-sort="top"'); goto mIbi0; ce1aV: } goto X4LAo; X4LAo: if ($this->canShow() && $this->grid->urlShow()) { $this->operates[] = TextAction::primary(L('Show'), 'data-show'); } goto C1hta; IQ98w: return join('', $this->operates); goto Rotml; Rotml: } }