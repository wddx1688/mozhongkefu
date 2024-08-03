<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Web\Controller; use Illuminate\Routing\Controller; use Illuminate\Support\Facades\Response; use Intervention\Image\Facades\Image; class PlaceholderController extends Controller { public function index($oduWF, $Qyp0s) { goto Jncqf; zALwG: $yWNJ4->text($oduWF . 'x' . $Qyp0s, $oduWF / 2, $Qyp0s / 2, function ($j1iN5) use($oduWF, $Qyp0s) { $QtaxD = min($oduWF, $Qyp0s) / 10; $j1iN5->size($QtaxD); $j1iN5->color('#666666'); $j1iN5->align('center'); $j1iN5->valign('center'); }); goto Wc0td; ZJUTM: $Qyp0s = max($Qyp0s, 10); goto aAOVG; QP34J: $Qyp0s = min($Qyp0s, 2000); goto ZJUTM; Wc0td: return Response::make($yWNJ4->encode('png'))->header('Content-Type', 'image/png'); goto UJtp8; aAOVG: $yWNJ4 = Image::canvas($oduWF, $Qyp0s, '#CCC'); goto zALwG; mmmFn: $oduWF = max($oduWF, 10); goto QP34J; Jncqf: $oduWF = min($oduWF, 2000); goto mmmFn; UJtp8: } }