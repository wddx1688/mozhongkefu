<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use Illuminate\Support\Facades\Event; use ModStart\Core\Util\EventUtil; class DataDeletedEvent { public $data; public static function fire($nx179) { goto Efx2B; F6z0L: $bZKZ0->data = $nx179; goto g0jJP; Efx2B: $bZKZ0 = new static(); goto F6z0L; g0jJP: EventUtil::fire($bZKZ0); goto bX0J4; bX0J4: } public static function listen($k_TMY) { Event::listen(DataDeletedEvent::class, function (DataDeletedEvent $bZKZ0) use($k_TMY) { call_user_func($k_TMY, $bZKZ0); }); } }