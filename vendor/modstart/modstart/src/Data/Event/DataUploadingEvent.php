<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use Illuminate\Support\Facades\Event; use ModStart\Core\Util\EventUtil; class DataUploadingEvent { public $uploadTable; public $userId; public $category; public static function fire($mNNZK, $OLPDZ, $gAXRi) { goto xuNGV; XWygf: EventUtil::fire($bZKZ0); goto Iau2u; asyhu: $bZKZ0->userId = $OLPDZ; goto xwM71; xuNGV: $bZKZ0 = new static(); goto oDdI7; xwM71: $bZKZ0->category = $gAXRi; goto XWygf; oDdI7: $bZKZ0->uploadTable = $mNNZK; goto asyhu; Iau2u: } public static function listen($mNNZK, $k_TMY) { Event::listen(DataUploadingEvent::class, function (DataUploadingEvent $bZKZ0) use($mNNZK, $k_TMY) { if ($bZKZ0->uploadTable == $mNNZK) { call_user_func($k_TMY, $bZKZ0); } }); } }