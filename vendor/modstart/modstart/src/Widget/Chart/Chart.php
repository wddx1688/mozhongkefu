<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Widget\Chart; use ModStart\Core\Util\RandomUtil; use ModStart\Widget\AbstractWidget; use ModStart\Widget\Traits\DSTrait; class Chart extends AbstractWidget { use DSTrait; protected $view = 'modstart::widget.chart'; protected $height = 300; protected $option = array('grid' => array('right' => '1%', 'left' => '1%', 'bottom' => '10%', 'containLabel' => true), 'toolbox' => array('feature' => array('dataView' => array('show' => true, 'readOnly' => false), 'restore' => array('show' => true), 'saveAsImage' => array('show' => true))), 'tooltip' => array('trigger' => 'axis', 'axisPointer' => array('type' => 'shadow', 'snap' => true, 'crossStyle' => array('color' => '#999'))), 'legend' => array('data' => array()), 'xAxis' => array('type' => 'category', 'data' => array()), 'yAxis' => array('type' => 'value', 'minInterval' => 1), 'series' => array()); public function __construct() { parent::__construct(); } protected function variables() { return array('option' => $this->option, 'height' => $this->height); } public static function make() { return new static(); } public function option($VuXfH = null) { goto CNCY8; gqglA: return $this; goto J1Y7I; CNCY8: if (is_null($VuXfH)) { return $this->option; } goto msNVY; msNVY: $this->option = $VuXfH; goto gqglA; J1Y7I: } public function optionSet($cANPj, $VuXfH) { $this->option[$cANPj] = $VuXfH; return $this; } public function random() { goto Ao4US; Ao4US: $this->option['xAxis']['data'] = RandomUtil::dateCollection(); goto uf_qG; uf_qG: $this->ySeries(0, RandomUtil::numberCollection()); goto xboqN; xboqN: return $this; goto bHhaW; bHhaW: } public function xData($VuXfH, $kKcR8 = array()) { $this->option['xAxis']['data'] = $VuXfH; return $this; } public function yData($VuXfH, $HQ4FM = '数量', $kKcR8 = array()) { return $this->ySeries(0, $VuXfH, $HQ4FM, $kKcR8); } }