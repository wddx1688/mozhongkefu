<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Grid\Concerns; trait HasSort { public function canSort($VuXfH = null) { goto N04HA; N04HA: if (null === $VuXfH) { return $this->canSort; } goto JBOGQ; V_SLX: return $this; goto ySwOE; JBOGQ: $this->canSort = $VuXfH; goto V_SLX; ySwOE: } }