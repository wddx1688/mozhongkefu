<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; use ModStart\ModStart; class TextAjaxRequest extends AbstractWidget { public static function getAssets() { return array('style' => '.ub-text-ajax-request{display:inline-block;margin-right:0.5rem;}'); } public static function make(...$wnXyT) { goto Jhk0u; aMgkY: $EGxkN->type($wnXyT[0]); goto etWy_; Jhk0u: $EGxkN = new static(); goto aMgkY; g5zKu: $EGxkN->url($wnXyT[2]); goto uPUjP; uPUjP: return $EGxkN; goto zo0Qr; etWy_: $EGxkN->text($wnXyT[1]); goto g5zKu; zo0Qr: } public static function __callStatic($HQ4FM, $wnXyT) { goto rZ0nM; rZ0nM: $m8cil = array('primary', 'muted', 'warning', 'danger', 'success'); goto pUV_S; WakZ_: throw new \Exception('TextAjaxRequest error ' . join(',', $m8cil) . ' '); goto IzYy4; pUV_S: if (in_array($HQ4FM, $m8cil)) { goto ufttb; jla4l: return $EGxkN->render(); goto RV_Pc; qCMAk: $EGxkN->type($HQ4FM); goto yoyM8; ufttb: $EGxkN = new static(); goto qCMAk; nHoBr: $EGxkN->confirm(empty($wnXyT[2]) ? '' : $wnXyT[2]); goto IO2uH; yoyM8: $EGxkN->text($wnXyT[0]); goto Qvt98; IO2uH: $EGxkN->disabled(empty($wnXyT[3]) ? false : true); goto jla4l; Qvt98: $EGxkN->url($wnXyT[1]); goto nHoBr; RV_Pc: } goto WakZ_; IzYy4: } public function render() { if ($this->disabled) { return '<a href="javascript:;" class="ub-text-ajax-request ub-text-' . $this->type . '">' . $this->text . '</a>'; } else { return '<a href="javascript:;" ' . ($this->confirm ? 'data-confirm="' . $this->confirm . '"' : '') . ' data-ajax-request-loading data-ajax-request="' . $this->url . '" class="ub-text-ajax-request ub-text-' . $this->type . '" ' . ' ' . ($this->attr ? $this->attr : '') . '>' . $this->text . '</a>'; } } }