<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Member\Model; use Illuminate\Database\Eloquent\Model; class MemberDataStatistic extends Model { protected $table = 'member_data_statistic'; public static function getCreateMemberUser($vWdBd) { goto d_r2Y; d_r2Y: $wvU9w = self::where('id', $vWdBd)->first(); goto rKqdO; rKqdO: if (empty($wvU9w)) { goto rM0y6; RJP3B: $E1j2M->save(); goto awDv8; E9LKY: return self::getCreateMemberUser($vWdBd); goto MG5sP; awDv8: self::updateMemberUserUsedSize($vWdBd); goto E9LKY; rM0y6: $E1j2M = new self(); goto Rl4PU; C1wOg: $E1j2M->sizeLimit = modstart_config('Member_DataStatisticDefaultLimit', 1024); goto RJP3B; Rl4PU: $E1j2M->id = $vWdBd; goto C1wOg; MG5sP: } goto I_QgK; I_QgK: return $wvU9w->toArray(); goto WDgk8; WDgk8: } public static function updateMemberUser($vWdBd, $XWlC_) { goto BkJSd; v0Vp4: if ($zA3QK) { self::updateMemberUserUsedSize($vWdBd); } goto PBpCQ; ORX4t: $zA3QK = false; goto GmrkK; BkJSd: $E1j2M = self::where('id', $vWdBd)->first(); goto ORX4t; GmrkK: if (empty($E1j2M)) { goto p0gCL; p0gCL: $E1j2M = new self(); goto jjTW3; jjTW3: $E1j2M->id = $vWdBd; goto UtN3E; UtN3E: $zA3QK = true; goto ilT3Z; ilT3Z: } goto P4csJ; xqDhp: $E1j2M->save(); goto v0Vp4; P4csJ: foreach ($XWlC_ as $U8G_W => $gghxW) { $E1j2M->{$U8G_W} = $gghxW; } goto xqDhp; PBpCQ: } public static function calcMemberUserUsedSize($vWdBd) { $yOLWI = MemberUpload::where(array('userId' => $vWdBd))->leftJoin('data', 'data.id', '=', 'member_upload.dataId')->sum('data.size'); return intval($yOLWI); } public static function updateMemberUserUsedSize($vWdBd) { $Bj5vh = array('sizeUsed' => self::calcMemberUserUsedSize($vWdBd)); self::where('id', $vWdBd)->update($Bj5vh); } }