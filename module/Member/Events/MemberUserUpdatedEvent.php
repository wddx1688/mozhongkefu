<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Events; class MemberUserUpdatedEvent { public $memberUserId; public $type; public function __construct($tJ6XI, $mhShF) { $this->memberUserId = $tJ6XI; $this->type = $mhShF; } }