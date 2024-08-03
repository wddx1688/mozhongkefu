<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget; class StatusText extends AbstractWidget { public static function getAssets() { return array('style' => '.ub-status-text{display:inline-block;margin-right:0.5rem;}'); } public static function __callStatic($HQ4FM, $wnXyT) { goto BL233; QOIb4: throw new \Exception('StatusText error ' . join(',', $m8cil) . ' '); goto OVuJG; BL233: $m8cil = array('muted', 'warning', 'danger', 'success'); goto rEWbq; rEWbq: if (in_array($HQ4FM, $m8cil)) { goto wsTo7; d7FK3: $EGxkN->text($wnXyT[0]); goto ZtzJF; wsTo7: $EGxkN = new static(); goto d7FK3; x0J_v: return $EGxkN->render(); goto cW9DA; ZtzJF: $EGxkN->type($HQ4FM); goto x0J_v; cW9DA: } goto QOIb4; OVuJG: } public function render() { return '<span class="ub-status-text ub-text-' . $this->type . '">' . $this->text . '</span>'; } }