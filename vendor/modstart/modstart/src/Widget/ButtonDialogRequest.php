<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; class ButtonDialogRequest extends AbstractWidget { public static function getAssets() { return array('style' => '.ub-button-dialog-request{display:inline-block;}'); } public static function __callStatic($HQ4FM, $wnXyT) { goto aAh4a; aAh4a: $m8cil = array('muted', 'warning', 'danger', 'success', 'primary'); goto tbfvB; yQthn: throw new \Exception('ButtonDialogRequest error ' . join(',', $m8cil) . ' '); goto mFzHG; tbfvB: if (in_array($HQ4FM, $m8cil)) { goto Qh3wM; xZPGo: $EGxkN->disabled(empty($wnXyT[2]) ? false : true); goto QXzzN; dzkxv: $EGxkN->type($HQ4FM); goto m6s0o; QXzzN: return $EGxkN->render(); goto wp7bF; jIrb2: $EGxkN->url($wnXyT[1]); goto xZPGo; m6s0o: $EGxkN->text($wnXyT[0]); goto jIrb2; Qh3wM: $EGxkN = new static(); goto dzkxv; wp7bF: } goto yQthn; mFzHG: } public static function make(...$wnXyT) { goto nnn32; woTF4: return $EGxkN; goto N52nn; bfGw9: $EGxkN->text($wnXyT[1]); goto cncfX; nnn32: $EGxkN = new static(); goto px9Wf; px9Wf: $EGxkN->type($wnXyT[0]); goto bfGw9; cncfX: $EGxkN->url($wnXyT[2]); goto woTF4; N52nn: } public function size($j7D2N = 'big') { switch ($j7D2N) { case 'big': return $this->attr(($this->attr ? $this->attr : '') . ' data-dialog-width="90%" data-dialog-height="90%"'); } return $this; } public function render() { if ($this->disabled) { return '<a href="javascript:;" class="btn ub-button-dialog-request btn-' . $this->type . '">' . $this->text . '</a>'; } else { return '<a href="javascript:;" ' . ($this->confirm ? 'data-confirm="' . $this->confirm . '"' : '') . ' data-dialog-request="' . $this->url . '" class="btn ub-button-dialog-request btn-' . $this->type . '" ' . ($this->attr ? $this->attr : '') . '>' . $this->text . '</a>'; } } }