<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use Illuminate\Support\Facades\Event; use ModStart\Core\Util\EventUtil; class DataUploadedEvent { public $uploadTable; public $userId; public $category; public $dataId; public static function fire($mNNZK, $OLPDZ, $gAXRi, $ORHuX) { goto ExH_H; YwoeU: $bZKZ0->dataId = $ORHuX; goto OjB8F; OjB8F: EventUtil::fire($bZKZ0); goto Rgwg5; G6Y95: $bZKZ0->userId = $OLPDZ; goto q3miw; q3miw: $bZKZ0->category = $gAXRi; goto YwoeU; ExH_H: $bZKZ0 = new static(); goto L1AAa; L1AAa: $bZKZ0->uploadTable = $mNNZK; goto G6Y95; Rgwg5: } public static function listen($mNNZK, $k_TMY) { Event::listen(DataUploadedEvent::class, function (DataUploadedEvent $bZKZ0) use($mNNZK, $k_TMY) { if ($bZKZ0->uploadTable == $mNNZK) { call_user_func($k_TMY, $bZKZ0); } }); } }