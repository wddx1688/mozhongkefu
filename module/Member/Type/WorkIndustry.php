<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Type; use ModStart\Core\Type\BaseType; class WorkIndustry implements BaseType { public static function getList() { goto pP9xk; S0vYs: return $VQao2; goto GRlAf; ko0UA: if (null === $VQao2) { $VQao2 = array(); foreach (array('计算机/互联网/通信', '公务员/事业单位', '教师', '医生', '护士', '空乘人员', '生产/工艺/制造', '商业/服务业/个体经营', '金融/银行/投资/保险', '文化/广告/传媒', '娱乐/艺术/表演', '律师/法务', '教育/培训/管理咨询', '建筑/房地产/物业', '消费零售/贸易/交通物流', '酒店旅游', '现代农业', '在校学生') as $AVLNU) { $VQao2[$AVLNU] = $AVLNU; } } goto S0vYs; pP9xk: static $VQao2 = null; goto ko0UA; GRlAf: } }