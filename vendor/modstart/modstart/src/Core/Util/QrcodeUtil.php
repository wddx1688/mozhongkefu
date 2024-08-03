<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Util; use BaconQrCode\Encoder\Encoder; use ModStart\Core\Exception\BizException; use ModStart\ModStart; class QrcodeUtil { public static function png($N19iJ, $j7D2N = 200) { goto iYZJS; tGfK8: return $LLl0k->writeString($N19iJ, 'UTF-8'); goto i8kz4; tLa6A: $LLl0k = new \BaconQrCode\Writer($SMUqD); goto tGfK8; iYZJS: if (class_exists(\BaconQrCode\Renderer\Image\Png::class)) { goto G4rTa; oUYgo: $SMUqD->setWidth($j7D2N); goto kcPWm; bDC4N: $SMUqD->setMargin(0); goto XTLO6; G4rTa: $SMUqD = new \BaconQrCode\Renderer\Image\Png(); goto bDC4N; XTLO6: $SMUqD->setHeight($j7D2N); goto oUYgo; kcPWm: } else { BizException::throwsIf('Please Install imagick extension', !extension_loaded('imagick')); $SMUqD = new \BaconQrCode\Renderer\ImageRenderer(new \BaconQrCode\Renderer\RendererStyle\RendererStyle(400), new \BaconQrCode\Renderer\Image\ImagickImageBackEnd()); } goto tLa6A; i8kz4: } public static function pngBase64String($N19iJ, $j7D2N = 200) { return 'data:image/png;base64,' . base64_encode(self::png($N19iJ, $j7D2N)); } }