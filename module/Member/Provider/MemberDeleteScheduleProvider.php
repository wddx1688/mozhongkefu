<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Provider; use ModStart\Core\Dao\ModelUtil; use Module\Member\Util\MemberUtil; use Module\Vendor\Provider\Schedule\AbstractScheduleBiz; class MemberDeleteScheduleProvider extends AbstractScheduleBiz { public function cron() { return $this->cronEveryMinute(); } public function title() { return '删除申请注销账号的用户'; } public function run() { $EnI2D = ModelUtil::model('member_user')->where('deleteAtTime', '>', 0)->where('deleteAtTime', '<', time())->where(array('isDeleted' => false))->get()->toArray(); foreach ($EnI2D as $DrwL4) { MemberUtil::delete($DrwL4['id']); } } }