<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; use ModStart\ModStart; class ButtonAjaxRequest extends AbstractWidget { public static function getAssets() { return array('style' => '.ub-button-ajax-request{display:inline-block;}'); } public static function __callStatic($HQ4FM, $wnXyT) { goto YowSz; mhB82: if (in_array($HQ4FM, $m8cil)) { goto JazSi; QN66s: return $EGxkN->render(); goto EGsty; PdLaO: $EGxkN->type($HQ4FM); goto MhdSB; j1qHL: $EGxkN->disabled(empty($wnXyT[3]) ? false : true); goto QN66s; JazSi: $EGxkN = new static(); goto PdLaO; MhdSB: $EGxkN->text($wnXyT[0]); goto nfnif; oVkHF: $EGxkN->confirm(empty($wnXyT[2]) ? '' : $wnXyT[2]); goto j1qHL; nfnif: $EGxkN->url($wnXyT[1]); goto oVkHF; EGsty: } goto v3fXq; v3fXq: throw new \Exception('ButtonAjaxRequest error ' . join(',', $m8cil) . ' '); goto Rcy8s; YowSz: $m8cil = array('muted', 'warning', 'danger', 'success', 'primary'); goto mhB82; Rcy8s: } public function render() { if ($this->disabled) { return '<a href="javascript:;" class="btn ub-button-ajax-request btn-' . $this->type . '">' . $this->text . '</a>'; } else { return '<a href="javascript:;" ' . ($this->confirm ? 'data-confirm="' . $this->confirm . '"' : '') . ' data-ajax-request-loading data-ajax-request="' . $this->url . '" class="btn ub-button-ajax-request btn-' . $this->type . '">' . $this->text . '</a>'; } } }