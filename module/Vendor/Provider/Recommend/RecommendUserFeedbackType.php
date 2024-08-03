<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\Recommend; use ModStart\Core\Type\BaseType; class RecommendUserFeedbackType implements BaseType { const LIKE = 'like'; const DISLIKE = 'dislike'; const VISIT = 'visit'; public static function getList() { return array(self::LIKE => '点赞', self::DISLIKE => '点踩', self::VISIT => '访问'); } }