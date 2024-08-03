<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Support\Manager; use ModStart\Core\Util\SerializeUtil; use ModStart\Widget\AbstractWidget; class WidgetManager { private static $availableWidgets = array(); private static $collectedAssets = null; private static $uses = array(); public static function uses($iCXib) { if (is_array($iCXib)) { foreach ($iCXib as $br4ul) { self::$uses[$br4ul] = true; } } else { self::$uses[$iCXib] = true; } } public static function registerBuiltinWidgets() { $bx4aO = array('statusText' => \ModStart\Widget\StatusText::class, 'textAjaxRequest' => \ModStart\Widget\TextAjaxRequest::class, 'textDialogRequest' => \ModStart\Widget\TextDialogRequest::class, 'textAction' => \ModStart\Widget\TextAction::class, 'textLink' => \ModStart\Widget\TextLink::class, 'buttonAjaxRequest' => \ModStart\Widget\ButtonAjaxRequest::class, 'buttonDialogRequest' => \ModStart\Widget\ButtonDialogRequest::class); foreach ($bx4aO as $jMNuB => $cVwn0) { WidgetManager::extend($jMNuB, $cVwn0); } } public static function collectWidgetAssets($EY7Cx = 'js|css|script|style') { goto g8sOf; g8sOf: if (!in_array($EY7Cx, array('js', 'css', 'script', 'style'))) { return array(); } goto oI8aE; dOd54: foreach (static::$availableWidgets as $HQ4FM => $dBa7F) { goto fWdtr; fWdtr: if (empty(self::$uses[$dBa7F])) { continue; } goto sy0gp; sy0gp: if (!method_exists($dBa7F, 'getAssets')) { continue; } goto FBjYV; FBjYV: $n95LX->push(array_get(call_user_func(array($dBa7F, 'getAssets')), $EY7Cx)); goto Jxj5s; Jxj5s: } goto ByFmk; b2ME1: $n95LX = collect(); goto dOd54; oI8aE: if (isset(static::$collectedAssets[$EY7Cx])) { return static::$collectedAssets[$EY7Cx]; } goto b2ME1; ByFmk: static::$collectedAssets[$EY7Cx] = $n95LX->flatten()->unique()->filter()->toArray(); goto lAkxc; lAkxc: return static::$collectedAssets[$EY7Cx]; goto v5Lal; v5Lal: } public static function extend($dBa7F, $cVwn0) { static::$availableWidgets[$dBa7F] = $cVwn0; } public static function findWidgetClass($lrQvV) { goto DOWrq; DOWrq: $cVwn0 = array_get(static::$availableWidgets, $lrQvV); goto hOsiX; fxIE5: return false; goto wVIZ1; hOsiX: if (class_exists($cVwn0)) { return $cVwn0; } goto fxIE5; wVIZ1: } public static function call($bzZJF, $lrQvV, $wnXyT) { if ($bQxSo = static::findWidgetClass($lrQvV)) { goto Csv9p; kzOXr: return $MwNmy; goto N5zJj; Csv9p: $NS5_3 = array_get($wnXyT, 0, ''); goto Gj64t; Gj64t: $MwNmy = new $bQxSo($NS5_3, array_slice($wnXyT, 1)); goto qbDVX; qbDVX: $bzZJF->pushField($MwNmy); goto kzOXr; N5zJj: } throw new \Exception('Widget [' . ucfirst($lrQvV) . '] not exists or registered, available: ' . SerializeUtil::jsonEncode(array_keys(static::$availableWidgets))); } }