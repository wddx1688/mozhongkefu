<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use ModStart\Core\Dao\ModelUtil; use Module\Member\Type\MemberMessageStatus; use Module\Member\Util\MemberUtil; class ModifyMemberUserMessageCount extends Migration { public function up() { goto XAele; d0SIt: foreach ($EnI2D as $He0J8) { MemberUtil::update($He0J8['userId'], array('messageCount' => $He0J8['count'])); } goto B7KPT; XAele: Schema::table('member_user', function (Blueprint $S_2ik) { $S_2ik->integer('messageCount')->nullable()->comment('未读消息数量'); }); goto lxkmj; lxkmj: $EnI2D = ModelUtil::model('member_message')->where(array('status' => MemberMessageStatus::UNREAD))->groupBy('userId')->get(array('userId', \DB::raw('count(*) as count')))->toArray(); goto d0SIt; B7KPT: } public function down() { } }