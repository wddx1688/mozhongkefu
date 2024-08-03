<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Illuminate\Queue; use DateTime; use Carbon\Carbon; use Illuminate\Database\Connection; use Illuminate\Queue\Jobs\DatabaseJob; use Illuminate\Database\Query\Expression; use Illuminate\Contracts\Queue\Queue as QueueContract; use Illuminate\Support\Facades\DB; class DatabaseQueue extends Queue implements QueueContract { protected $database; protected $table; protected $default; protected $expire = 60; public function __construct(Connection $r4_Df, $R3agm, $RsCDD = 'default', $CqqOx = 60) { goto oMHrJ; cvlGB: $this->default = $RsCDD; goto L0xoR; oMHrJ: $this->table = $R3agm; goto iEg2C; iEg2C: $this->expire = $CqqOx; goto cvlGB; L0xoR: $this->database = $r4_Df; goto LmEwG; LmEwG: } public function push($mYDq6, $nx179 = '', $QgVE4 = null) { return $this->pushToDatabase(0, $QgVE4, $this->createPayload($mYDq6, $nx179)); } public function pushRaw($UHUzq, $QgVE4 = null, array $iVFbz = array()) { return $this->pushToDatabase(0, $QgVE4, $UHUzq); } public function later($Qs4Xh, $mYDq6, $nx179 = '', $QgVE4 = null) { return $this->pushToDatabase($Qs4Xh, $QgVE4, $this->createPayload($mYDq6, $nx179)); } public function bulk($LnJik, $nx179 = '', $QgVE4 = null) { goto UQEe0; mWqgz: $CwvH8 = $this->getAvailableAt(0); goto uWPS3; qeePZ: return $this->database->table($this->table)->insert($nQYo_); goto PTAAj; uWPS3: $nQYo_ = array_map(function ($mYDq6) use($QgVE4, $nx179, $CwvH8) { return $this->buildDatabaseRecord($QgVE4, $this->createPayload($mYDq6, $nx179), $CwvH8); }, (array) $LnJik); goto qeePZ; UQEe0: $QgVE4 = $this->getQueue($QgVE4); goto mWqgz; PTAAj: } public function release($QgVE4, $mYDq6, $Qs4Xh) { return $this->pushToDatabase($Qs4Xh, $QgVE4, $mYDq6->payload, $mYDq6->attempts); } protected function pushToDatabase($Qs4Xh, $QgVE4, $UHUzq, $hLWyt = 0) { goto d_pTV; d_pTV: $I1N_U = $this->buildDatabaseRecord($this->getQueue($QgVE4), $UHUzq, $this->getAvailableAt($Qs4Xh), $hLWyt); goto HiD3S; tezt3: return $this->database->table($this->table)->insertGetId($I1N_U); goto tzidq; HiD3S: if (config('env.QUEUE_DATABASE_TAG_ENABLE', false)) { if ('database' == config('queue.default')) { if (($UHUzq = @json_decode($UHUzq, true)) && ($mYDq6 = @unserialize($UHUzq['data']['command'])) && property_exists($mYDq6, 'queueTag')) { $I1N_U['tag'] = $mYDq6->queueTag; } } } goto tezt3; tzidq: } public function pop($QgVE4 = null) { goto XX6T8; deDpJ: if (!is_null($this->expire)) { $this->releaseJobsThatHaveBeenReservedTooLong($QgVE4); } goto jngA5; jngA5: if ($mYDq6 = $this->getNextAvailableJob($QgVE4)) { goto BjQo5; BjQo5: $this->markJobAsReserved($mYDq6->id); goto LW4sa; RiDIk: return new DatabaseJob($this->container, $this, $mYDq6, $QgVE4); goto LrgYo; LW4sa: $this->database->commit(); goto RiDIk; LrgYo: } goto Lbyqa; XX6T8: $QgVE4 = $this->getQueue($QgVE4); goto deDpJ; Lbyqa: } protected function releaseJobsThatHaveBeenReservedTooLong($QgVE4) { goto n3OBE; n3OBE: $KXoje = Carbon::now()->subSeconds($this->expire)->getTimestamp(); goto OtoKG; XfEMc: foreach ($nQYo_ as $jdXuk) { $this->database->table($this->table)->where('id', $jdXuk->id)->update(array('reserved' => 0, 'reserved_at' => null, 'attempts' => new Expression('attempts + 1'))); } goto BLQiG; OtoKG: $nQYo_ = $this->database->table($this->table)->where('queue', $this->getQueue($QgVE4))->where('reserved', 1)->where('reserved_at', '<=', $KXoje)->get(); goto XfEMc; BLQiG: } protected function getNextAvailableJob($QgVE4) { goto I9i9H; bq6LN: $mYDq6 = $this->database->table($this->table)->lockForUpdate()->where('id', $mYDq6->id)->first(); goto efY1d; dXzsw: return null; goto ykR77; kz9HN: $this->database->beginTransaction(); goto bq6LN; k2Nrk: if ($wCoWC = config('env.QUEUE_DATABASE_TAGS', null)) { $IpOIw = $IpOIw->whereRaw(DB::raw("( FIND_IN_SET( tag, '{$wCoWC}' ) OR ( tag = '' ) OR ( tag IS NULL ) ) ")); } goto Ei96y; gDpvC: if (0 == $mYDq6->reserved) { return (object) $mYDq6; } goto jE0XA; jcX6t: if (empty($mYDq6)) { return null; } goto kz9HN; jE0XA: $this->database->commit(); goto dXzsw; Ei96y: $mYDq6 = $IpOIw->first(); goto jcX6t; I9i9H: $IpOIw = $this->database->table($this->table)->where('queue', $this->getQueue($QgVE4))->where('reserved', 0)->where('available_at', '<=', $this->getTime())->orderBy('id', 'asc'); goto k2Nrk; efY1d: if (empty($mYDq6)) { $this->database->commit(); return null; } goto gDpvC; ykR77: } protected function markJobAsReserved($CeOJi) { $this->database->table($this->table)->where('id', $CeOJi)->update(array('reserved' => 1, 'reserved_at' => $this->getTime())); } public function deleteReserved($QgVE4, $CeOJi) { $this->database->table($this->table)->where('id', $CeOJi)->delete(); } protected function getAvailableAt($Qs4Xh) { $CwvH8 = $Qs4Xh instanceof DateTime ? $Qs4Xh : Carbon::now()->addSeconds($Qs4Xh); return $CwvH8->getTimestamp(); } protected function buildDatabaseRecord($QgVE4, $UHUzq, $CwvH8, $hLWyt = 0) { return array('queue' => $QgVE4, 'payload' => $UHUzq, 'attempts' => $hLWyt, 'reserved' => 0, 'reserved_at' => null, 'available_at' => $CwvH8, 'created_at' => $this->getTime()); } protected function getQueue($QgVE4) { return $QgVE4 ?: $this->default; } public function getDatabase() { return $this->database; } public function getExpire() { return $this->expire; } public function setExpire($DHk5j) { $this->expire = $DHk5j; } }