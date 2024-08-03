<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data\Traits; use ModStart\Core\Input\Response; use ModStart\Data\Event\DataFileUploadedEvent; trait LocalMultipartUploadTrait { public function multiPartInit($kKcR8) { goto aRvbw; aRvbw: $VzL_6 = $this->multiPartInitToken($kKcR8); goto jxkC5; Zupkt: return Response::generate(0, 'ok', $VzL_6); goto ygmRD; jxkC5: $this->uploadChunkTokenAndUpdateToken($VzL_6); goto Zupkt; ygmRD: } public function multiPartUpload($kKcR8) { goto xOeu7; lrDfs: $gAXRi = $kKcR8['category']; goto le2p6; le2p6: $nx179 = array(); goto ar4HH; ar4HH: if (!isset($gY_Ck['chunks'])) { $gY_Ck['chunks'] = 1; } goto FjGaq; VcfwC: $nx179['chunks'] = $gY_Ck['chunks']; goto ugl9i; FjGaq: if (!isset($gY_Ck['chunk'])) { $gY_Ck['chunk'] = 0; } goto CZSBl; xOeu7: $VzL_6 = $this->multiPartInitToken($kKcR8); goto oHa8H; LZSKR: $DX8tH = self::DATA_CHUNK . '/data/' . $VzL_6['hash']; goto f0IoY; gcn8H: return Response::generate(0, 'ok', $nx179); goto T9rE8; CZSBl: if (empty($gY_Ck['file'])) { return Response::generateError('MultiPartUpload file empty'); } goto VcfwC; oHa8H: $gY_Ck = $kKcR8['input']; goto lrDfs; f0IoY: if ($nx179['chunk'] < $nx179['chunks']) { goto YI8sV; YI8sV: $N19iJ = file_get_contents($nx179['file']->getRealPath()); goto Ylhf5; wbl8Z: $VzL_6['chunkUploaded'] = $nx179['chunk'] + 1; goto pO5YL; jqDZu: $nx179['finished'] = false; goto s9LZO; s9LZO: if ($VzL_6['chunkUploaded'] == $nx179['chunks']) { goto Dgqq6; Dgqq6: $this->combine($DX8tH); goto ZtlVy; n4fLY: $this->saveLocalToRemote($DX8tH, $VzL_6['fullPath']); goto jhJ2z; A_DIR: $BFibK = $this->localStorage->size($DX8tH); goto kTQIP; oUlxg: $nx179['path'] = $VzL_6['fullPath']; goto m2HA7; Yw27M: DataFileUploadedEvent::fire($this->remoteType, $gAXRi, $VzL_6['fullPath']); goto kYboJ; m2HA7: $nx179['preview'] = $this->getDriverFullPath($VzL_6['fullPath']); goto D1JXt; kYboJ: $SEkL2 = $this->repository->addTemp($gAXRi, $VzL_6['path'], $VzL_6['name'], $VzL_6['size'], empty($VzL_6['md5']) ? null : $VzL_6['md5']); goto hmuDW; kTQIP: if ($BFibK != $VzL_6['size']) { return Response::generate(-1, 'MultiPartUpload combile file failed (' . $BFibK . ',' . $VzL_6['size'] . ') ShouldRetryUpload'); } goto n4fLY; D1JXt: $nx179['finished'] = true; goto SZm9C; hmuDW: $nx179['data'] = $SEkL2; goto oUlxg; ZtlVy: $this->uploadChunkTokenAndDeleteToken($VzL_6); goto A_DIR; jhJ2z: @unlink(public_path($DX8tH)); goto Yw27M; SZm9C: } goto t38vQ; pO5YL: $this->uploadChunkTokenAndUpdateToken($VzL_6); goto jqDZu; Ylhf5: $this->localStorage->put($DX8tH . '.' . $nx179['chunk'], $N19iJ); goto wbl8Z; t38vQ: } goto gcn8H; ugl9i: $nx179['chunk'] = $gY_Ck['chunk']; goto miWn7; miWn7: $nx179['file'] = $gY_Ck['file']; goto LZSKR; T9rE8: } private function combine($Z3orD) { goto nIOXl; hyeMk: $rcobI = @fopen($oQtao . $Z3orD, 'wb'); goto CgGTY; nIOXl: $oQtao = config('filesystems.disks.data.root'); goto hyeMk; CgGTY: if (flock($rcobI, LOCK_EX)) { for ($qsK6T = 0;; $qsK6T++) { if (!$this->localStorage->has($Z3orD . '.' . $qsK6T)) { break; } $N19iJ = file_get_contents($oQtao . $Z3orD . '.' . $qsK6T); fwrite($rcobI, $N19iJ); @unlink($oQtao . $Z3orD . '.' . $qsK6T); } flock($rcobI, LOCK_UN); } goto x1N6h; x1N6h: fclose($rcobI); goto gWRta; gWRta: } }