<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Form\Concern; use ModStart\Field\CascadeGroup; trait HasCascadeFields { public function cascadeGroup(\Closure $hB9j0, $kKcR8 = array()) { goto XdEdX; dM2P_: call_user_func($hB9j0, $this); goto eiJu8; mn5IX: return $lIcLr; goto cubch; lRoHa: $lIcLr->renderMode($this->fieldDefaultRenderMode()); goto gnEBw; eiJu8: $lIcLr->end(); goto mn5IX; XdEdX: $lIcLr = new CascadeGroup($kKcR8['id'] . '_group_' . $kKcR8['index']); goto lRoHa; gUm4J: $this->pushField($lIcLr); goto dM2P_; gnEBw: $lIcLr->context($this); goto gUm4J; cubch: } }