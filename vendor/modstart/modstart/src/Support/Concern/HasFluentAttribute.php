<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Concern; trait HasFluentAttribute { protected function addFluentAttributeVariable($HQ4FM) { if (!in_array($HQ4FM, $this->fluentAttributes)) { $this->fluentAttributes[] = $HQ4FM; } } protected function fluentAttributeVariables() { goto ZxNrU; N0I9k: foreach ($this->fluentAttributes as $yFWLi) { $nx179[$yFWLi] = $this->{$yFWLi}; } goto uiNTg; uiNTg: return $nx179; goto P00Q0; ZxNrU: $nx179 = array(); goto N0I9k; P00Q0: } protected function isFluentAttribute($lrQvV) { return in_array($lrQvV, $this->fluentAttributes); } protected function setFluentAttribute($HQ4FM, $VuXfH) { $this->{$HQ4FM} = $VuXfH; } protected function fluentAttribute($lrQvV, $wnXyT) { goto Q0a2T; NZVZQ: return $this; goto nxzFW; Q0a2T: if (!isset($wnXyT[0])) { return $this->{$lrQvV}; } goto wVoCC; wVoCC: $this->{$lrQvV} = $wnXyT[0]; goto NZVZQ; nxzFW: } }