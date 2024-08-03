<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\PersonVerify; class PersonVerifyIdCardResponse { const STATUS_SUCCESS = 'success'; const STATUS_FAIL = 'fail'; public $code; public $msg; public $status; public static function build($fKl3n, $miOiF, $jpbC0 = null) { goto krdJo; krdJo: $X0c2E = new static(); goto UqAUz; UqAUz: $X0c2E->code = $fKl3n; goto WlJW2; zxyT6: return $X0c2E; goto IoyFC; WlJW2: $X0c2E->msg = $miOiF; goto Ke1Io; Ke1Io: $X0c2E->status = $jpbC0; goto zxyT6; IoyFC: } }