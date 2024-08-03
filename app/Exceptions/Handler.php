<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace App\Exceptions; use Exception; use Illuminate\Database\Eloquent\ModelNotFoundException; use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler; use ModStart\Core\Exception\BizException; use ModStart\Core\Exception\ExceptionReportHandleTrait; use Symfony\Component\HttpKernel\Exception\HttpException; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; class Handler extends ExceptionHandler { use ExceptionReportHandleTrait; protected $dontReport = array(HttpException::class, ModelNotFoundException::class, BizException::class); public function report(Exception $GvgzI) { $this->errorReportCheck($GvgzI); parent::report($GvgzI); } public function render($yxuuJ, Exception $YhWK8) { goto nmj13; m7jOf: if (null !== $hcwVq) { return $hcwVq; } goto gGBf3; nmj13: if ($YhWK8 instanceof ModelNotFoundException) { $YhWK8 = new NotFoundHttpException($YhWK8->getMessage(), $YhWK8); } goto NfPak; gGBf3: return parent::render($yxuuJ, $YhWK8); goto G3yoH; NfPak: $hcwVq = $this->getExceptionResponse($YhWK8); goto m7jOf; G3yoH: } protected function convertExceptionToResponse(Exception $YhWK8) { goto VorYW; cbDak: if (env('APP_DEBUG', true)) { return parent::convertExceptionToResponse($YhWK8); } goto hgQWp; k7OJX: if (null !== $hcwVq) { return $hcwVq; } goto cbDak; VorYW: $hcwVq = $this->getExceptionResponse($YhWK8); goto k7OJX; hgQWp: return response()->view('errors.500', array('exception' => $YhWK8), 500); goto l8DN5; l8DN5: } protected function shouldntReport(\Exception $YhWK8) { return $this->isExceptionIgnore($YhWK8) || parent::shouldntReport($YhWK8); } }