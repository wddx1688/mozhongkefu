<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Event; use ModStart\Core\Util\EventUtil; class DataFileUploadedEvent { const OPT_IMAGE_COMPRESS_IGNORE = 'imageCompressIgnore'; const OPT_IMAGE_WATERMARK_IGNORE = 'imageWatermarkIgnore'; public $driver; public $category; public $path; public $opt; public static function fire($q01jQ, $gAXRi, $hCl98, $YLHoa = array()) { goto bPPjR; LLnIC: $bZKZ0->path = $hCl98; goto JPdkO; JPdkO: $bZKZ0->opt = $YLHoa; goto WYJwu; oB9c8: $bZKZ0->category = $gAXRi; goto LLnIC; bHPId: $bZKZ0->driver = $q01jQ; goto oB9c8; WYJwu: EventUtil::fire($bZKZ0); goto y5BcU; bPPjR: $bZKZ0 = new DataFileUploadedEvent(); goto bHPId; y5BcU: } public function getOpt($cANPj, $bX2xJ = null) { if (isset($this->opt[$cANPj])) { return $this->opt[$cANPj]; } return $bX2xJ; } private static $param = array(); public static function setParam($cANPj, $VuXfH) { self::$param[$cANPj] = $VuXfH; } public static function forgetParam($cANPj) { unset(self::$param[$cANPj]); } public static function getParam($cANPj) { return isset(self::$param[$cANPj]) ? self::$param[$cANPj] : null; } }