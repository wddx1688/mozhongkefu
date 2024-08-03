<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Dao; use Illuminate\Database\Eloquent\Model; use ModStart\Core\Util\FileUtil; use ModStart\Core\Util\StubUtil; class DynamicModel extends Model { public static function make($R3agm) { goto cDFnJ; wuRGo: $cVwn0 = '\\DynamicModel\\' . $bQxSo; goto lG3CH; bnCst: return new $cVwn0(); goto QghAP; cDFnJ: $bQxSo = 'DynamicModel_' . $R3agm; goto wuRGo; lG3CH: if (!class_exists($cVwn0)) { goto ZJl7e; lKOQm: if (!file_exists($Z3orD)) { $N19iJ = StubUtil::render('DynamicModel', array('className' => $bQxSo, 'table' => $R3agm)); file_put_contents($Z3orD, $N19iJ); } goto ZG2S0; ZJl7e: $Z3orD = base_path('bootstrap/cache/' . $bQxSo . '.php'); goto lKOQm; ZG2S0: require $Z3orD; goto s3j9p; s3j9p: } goto bnCst; QghAP: } }