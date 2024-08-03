<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; use Illuminate\Contracts\Pagination\LengthAwarePaginator; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Database\Eloquent\Builder; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Relations; use Illuminate\Database\Eloquent\SoftDeletes; use Illuminate\Support\Arr; use Illuminate\Support\Collection; use Illuminate\Support\Facades\DB; use Illuminate\Support\Str; use ModStart\Core\Dao\DynamicModel; use ModStart\Core\Exception\BizException; use ModStart\Core\Exception\ResultException; use ModStart\Core\Type\SortAddPosition; use ModStart\Core\Type\SortDirection; use ModStart\Core\Util\ReUtil; use ModStart\Core\Util\TreeUtil; use ModStart\Detail\Detail; use ModStart\Form\Form; use ModStart\Form\Type\FormEngine; class EloquentRepository extends Repository { protected $eloquentClass; protected $model; protected $queryBuilder; protected $relations = array(); protected $collection; public function __construct($b6KnA = array()) { $this->initModel($b6KnA); } protected function initModel($b6KnA) { goto I9eBK; I9eBK: if (is_string($b6KnA) && class_exists($b6KnA)) { $this->eloquentClass = $b6KnA; } elseif ($b6KnA instanceof Model) { $this->eloquentClass = get_class($b6KnA); $this->model = $b6KnA; } elseif ($b6KnA instanceof Builder) { goto ajZ5a; u8CZH: $this->queryBuilder = $b6KnA; goto kZSCh; ajZ5a: $this->model = $b6KnA->getModel(); goto h5S_N; h5S_N: $this->eloquentClass = get_class($this->model); goto u8CZH; kZSCh: } else { $this->with($b6KnA); } goto izE84; izE84: $this->setKeyName($this->eloquent()->getKeyName()); goto zXPxy; zXPxy: $this->setIsSoftDeletes(in_array(SoftDeletes::class, class_uses($this->eloquent()))); goto majtj; majtj: } public function setKeyName($PkGEp) { parent::setKeyName($PkGEp); if ($this->model && $this->model instanceof DynamicModel) { $this->model->setKeyName($PkGEp); } } public function getCreatedAtColumn() { return $this->eloquent()->getCreatedAtColumn(); } public function getUpdatedAtColumn() { return $this->eloquent()->getUpdatedAtColumn(); } public function getTableColumns() { return array('*'); } public function getFormColumns() { return array('*'); } public function getShowColumns() { return array('*'); } public function with($Gv5gR) { $this->relations = (array) $Gv5gR; return $this; } public function getQuery(\ModStart\Grid\Model $Wa8N4) { goto g3DfN; g3DfN: $this->setOrder($Wa8N4); goto Pzazw; Pzazw: $IpOIw = $this->newQuery(); goto A9CUD; Nn72X: $f8n18 = $this->getTableColumns(); goto BRvVX; fLhhK: $Wa8N4->grid()->repositoryFilter()->executeQueries($IpOIw); goto D3EvR; A9CUD: if ($this->relations) { $IpOIw->with($this->relations); } goto EfVLM; fdXzH: return $IpOIw; goto njqCE; Q1Tla: $QonVS = $Wa8N4->grid()->gridFilterJoins(); goto GZuyL; GZuyL: if (!empty($QonVS)) { $g8UZy = array('left' => 'leftJoin', 'right' => 'rightJoin', 'inner' => 'innerJoin'); foreach ($QonVS as $SdLqb) { goto tdgtq; xNh12: array_shift($SdLqb); goto iY3KI; iY3KI: call_user_func_array(array($IpOIw, $g8UZy[$Meki8]), $SdLqb); goto T7_Qm; tdgtq: $Meki8 = $SdLqb[0]; goto xNh12; T7_Qm: } } goto OSd78; D3EvR: $Wa8N4->grid()->scopeExecuteQueries($IpOIw); goto Nn72X; EfVLM: $d84PX = $this->getArgument('treePid', null); goto eOV64; OSd78: $Wa8N4->getQueries()->each(function ($VuXfH) use(&$IpOIw, $f8n18) { if ($VuXfH['method'] == 'paginate') { $VuXfH['arguments'][1] = $f8n18; } elseif ($VuXfH['method'] == 'get') { $VuXfH['arguments'] = array($f8n18); } $IpOIw = call_user_func_array(array($IpOIw, $VuXfH['method']), $VuXfH['arguments'] ? $VuXfH['arguments'] : array()); }); goto fdXzH; BRvVX: if ($Wa8N4->grid()->isDynamicModel()) { foreach ($f8n18 as $dKmL2 => $yFWLi) { if ($yFWLi == '*') { $f8n18[$dKmL2] = $Wa8N4->grid()->getDynamicModelTableName() . '.*'; } } } goto Q1Tla; eOV64: if (null !== $d84PX) { $IpOIw->where($this->getTreePidColumn(), $d84PX); } goto fLhhK; njqCE: } public function get(\ModStart\Grid\Model $Wa8N4) { goto bDm2c; tW2IG: $f8n18 = $this->getTableColumns(); goto pM5F7; fkEmg: return $IpOIw; goto xNsYS; pM5F7: if ($Wa8N4->grid()->isDynamicModel()) { foreach ($f8n18 as $dKmL2 => $yFWLi) { if ($yFWLi == '*') { $f8n18[$dKmL2] = $Wa8N4->grid()->getDynamicModelTableName() . '.*'; } } } goto ZFjT1; V3KJx: $Wa8N4->grid()->repositoryFilter()->executeQueries($IpOIw); goto nJwIF; SXBRb: $Wa8N4->getQueries()->each(function ($VuXfH) use(&$IpOIw, $f8n18) { if ($VuXfH['method'] == 'paginate') { $VuXfH['arguments'][1] = $f8n18; } elseif ($VuXfH['method'] == 'get') { $VuXfH['arguments'] = array($f8n18); } $IpOIw = call_user_func_array(array($IpOIw, $VuXfH['method']), $VuXfH['arguments'] ? $VuXfH['arguments'] : array()); }); goto fkEmg; ZFjT1: $QonVS = $Wa8N4->grid()->gridFilterJoins(); goto yVK35; TmP5z: if (null !== $d84PX) { $IpOIw->where($this->getTreePidColumn(), $d84PX); } goto V3KJx; yVK35: if (!empty($QonVS)) { $g8UZy = array('left' => 'leftJoin', 'right' => 'rightJoin', 'inner' => 'innerJoin'); foreach ($QonVS as $SdLqb) { goto tbLRf; tbLRf: $Meki8 = $SdLqb[0]; goto vUQCE; W2haj: call_user_func_array(array($IpOIw, $g8UZy[$Meki8]), $SdLqb); goto lX4Cm; vUQCE: array_shift($SdLqb); goto W2haj; lX4Cm: } } goto SXBRb; IhjrQ: $d84PX = $this->getArgument('treePid', null); goto TmP5z; bDm2c: $this->setOrder($Wa8N4); goto CvKyT; J6ee4: $IpOIw = $this->newQuery(); goto P0M74; CvKyT: $this->setPaginate($Wa8N4); goto J6ee4; nJwIF: $Wa8N4->grid()->scopeExecuteQueries($IpOIw); goto tW2IG; P0M74: if ($this->relations) { $IpOIw->with($this->relations); } goto IhjrQ; xNsYS: } protected function setOrder(\ModStart\Grid\Model $Wa8N4) { goto MePTi; FjyBL: foreach ($Ln38v as $mAYhv) { goto u06Yv; lD3MI: if (empty($NS5_3) || empty($EY7Cx)) { continue; } goto XSa99; u06Yv: list($NS5_3, $EY7Cx) = $mAYhv; goto lD3MI; XSa99: if (Str::contains($NS5_3, '.')) { die('Under Dev'); } else { $Wa8N4->addQuery('orderBy', array($NS5_3, $EY7Cx)); } goto cTFnS; cTFnS: } goto CmB44; ERpJM: if (empty($Ln38v)) { return; } goto ij4mJ; ij4mJ: $Wa8N4->resetOrderBy(); goto FjyBL; MePTi: $Ln38v = $Wa8N4->getOrder(); goto ERpJM; CmB44: } protected function setPaginate(\ModStart\Grid\Model $Wa8N4) { goto a58ne; a58ne: $IObeA = $Wa8N4->findQueryByMethod('paginate'); goto VdIhw; VdIhw: $Wa8N4->rejectQuery(array('paginate')); goto j2NBq; j2NBq: if (!$Wa8N4->allowPagination()) { $Wa8N4->addQuery('get', array($this->getTableColumns())); } else { $Wa8N4->addQuery('paginate', $this->resolvePaginateArguments($Wa8N4, $IObeA)); } goto EhHL4; EhHL4: } protected function resolvePaginateArguments(\ModStart\Grid\Model $Wa8N4, $IObeA) { if ($IObeA && is_array($IObeA)) { if ($qp8x7 = intval($this->getArgument('pageSize'))) { $IObeA['arguments'][0] = $qp8x7; } return $IObeA['arguments']; } return array($Wa8N4->getPageSize(), $this->getTableColumns(), $Wa8N4->getPageName(), $Wa8N4->getPage()); } public function editing(Form $c9K5c) { goto Spkkw; hRAwm: $c9K5c->repositoryFilter()->executeQueries($IpOIw); goto kjiUd; hSTM_: return $this->model; goto AjXTg; Spkkw: $IpOIw = $this->newQuery(); goto hRAwm; kjiUd: if ($this->isSoftDeletes) { $IpOIw->withTrashed(); } goto REDu2; REDu2: $this->model = $IpOIw->with($this->getRelations())->find($c9K5c->itemId(), $this->getFormColumns()); goto hSTM_; AjXTg: } public function show(Detail $LT01t) { goto PJ0mG; J7EyP: return $this->model; goto byFy7; Pi0XK: $LT01t->repositoryFilter()->executeQueries($IpOIw); goto HAT65; PJ0mG: $IpOIw = $this->newQuery(); goto Pi0XK; nXoOz: $this->model = $IpOIw->with($this->getRelations())->find($LT01t->itemId(), $this->getShowColumns()); goto J7EyP; HAT65: if ($this->isSoftDeletes) { $IpOIw->withTrashed(); } goto nXoOz; byFy7: } private function prepareExistsSort($dBa7F, Form $c9K5c) { goto B2FO1; FHE_8: $c9K5c->scopeExecuteQueries($IpOIw); goto D_W87; MBmpY: $c9K5c->repositoryFilter()->executeQueries($IpOIw); goto FHE_8; D_W87: if ($this->isSoftDeletes) { $IpOIw->withTrashed(); } goto hp2jM; hp2jM: $IpOIw->update(array($dBa7F => DB::raw("`{$dBa7F}` + 1"))); goto WJkaq; B2FO1: $IpOIw = $this->newQuery(); goto MBmpY; WJkaq: } private function getNextSortValue($dBa7F, Form $c9K5c) { switch ($c9K5c->sortAddPosition()) { case SortAddPosition::HEAD: $VuXfH = 1; break; case SortAddPosition::TAIL: default: goto e_gwP; ZnblZ: if ($this->isSoftDeletes) { $IpOIw->withTrashed(); } goto RUKSo; RUKSo: $VuXfH = intval($IpOIw->with($this->getRelations())->max($dBa7F)) + 1; goto NcGJ3; mNRD2: $c9K5c->scopeExecuteQueries($IpOIw); goto ZnblZ; e_gwP: $IpOIw = $this->newQuery(); goto briX0; NcGJ3: break; goto RASnM; briX0: $c9K5c->repositoryFilter()->executeQueries($IpOIw); goto mNRD2; RASnM: } return $VuXfH; } public function add(Form $c9K5c) { goto TN6n6; iS3G6: $Wa8N4 = $this->eloquent(); goto LNJ_3; LNJ_3: try { DB::transaction(function () use($c9K5c, &$jq2n1, $Wa8N4) { ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookSaving())); list($Gv5gR, $Hamse) = $this->getRelationInputs($Wa8N4, $c9K5c->dataAdding()); if ($Gv5gR) { $c9K5c->dataAdding(array_except($c9K5c->dataAdding(), array_keys($Gv5gR))); } foreach ($c9K5c->dataAdding() as $NS5_3 => $VuXfH) { $Wa8N4->setAttribute($NS5_3, $VuXfH); } if ($c9K5c->engine() == FormEngine::TREE || $c9K5c->engine() == FormEngine::TREE_MASS) { if ($Wa8N4->getAttribute($this->getTreePidColumn())) { BizException::throwsIf(L('Parent Item Not Exists'), !TreeUtil::modelItemAddAble($Wa8N4, $Wa8N4->getAttribute($this->getTreePidColumn()), $this->getKeyName())); } $Wa8N4->setAttribute($this->getTreeSortColumn(), $this->getNextSortValue($this->getTreeSortColumn(), $c9K5c)); } if ($c9K5c->canSort()) { $HwF8D = $this->getSortColumn(); if (empty($Wa8N4->getAttribute($HwF8D))) { $Wa8N4->setAttribute($HwF8D, $this->getNextSortValue($HwF8D, $c9K5c)); } } foreach ($c9K5c->scopeAddedParam() as $dKmL2 => $yFWLi) { $Wa8N4->setAttribute($dKmL2, $yFWLi); } switch ($c9K5c->sortAddPosition()) { case SortAddPosition::HEAD: $this->prepareExistsSort($this->getSortColumn(), $c9K5c); break; } $jq2n1 = $Wa8N4->save(); $this->updateRelation($c9K5c, $Wa8N4, $Gv5gR, $Hamse); $c9K5c->item($Wa8N4); ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookSaved())); ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookChanged())); }); } catch (\Exception $l8i0J) { $this->throwDatabaseException($l8i0J); } goto DlI2Q; DlI2Q: return $Wa8N4->getKey(); goto gmw7E; TN6n6: $jq2n1 = null; goto iS3G6; gmw7E: } private function throwDatabaseException(\Exception $l8i0J) { goto b7JYh; WjyR_: if (Str::contains($VBX5k, 'Duplicate entry')) { BizException::throws(L('Records Duplicated')); } goto b0kDa; b7JYh: $VBX5k = $l8i0J->getMessage(); goto WjyR_; b0kDa: $tIQz5 = array(array('Data too long for column', '/Data too long for column \'(.*)\' at row/'), array('Data truncated for column', '/Data truncated for column \'(.*)\' at row/'), array('Incorrect integer value', '/ for column \'(.*)\' at row/'), array('Incorrect decimal value', '/ for column \'(.*)\' at row/'), array('Incorrect datetime value', '/ for column \'(.*)\' at row/'), array('Incorrect time value', '/ for column \'(.*)\' at row/'), array('Incorrect date value', '/ for column \'(.*)\' at row/')); goto B7Iuv; B7Iuv: foreach ($tIQz5 as $vhE98) { if (Str::contains($VBX5k, $vhE98[0])) { goto wHX3F; wHX3F: $NS5_3 = ReUtil::group1($vhE98[1], $VBX5k); goto nMue_; jxcE_: throw $l8i0J; goto U8Izl; nMue_: if (!empty($NS5_3)) { BizException::throws("FieldFormatError:{$NS5_3}"); } goto jxcE_; U8Izl: } } goto KM7aV; KM7aV: throw $l8i0J; goto fxFSV; fxFSV: } public function edit(Form $c9K5c) { goto vWaXk; OxqJw: return $jq2n1; goto XBrGo; vWaXk: $Wa8N4 = $this->eloquent(); goto tljAb; tljAb: if (!$Wa8N4->getKey()) { $Wa8N4->exists = true; $Wa8N4->setAttribute($Wa8N4->getKeyName(), $c9K5c->itemId()); } goto aLomK; aLomK: $jq2n1 = null; goto MyTVe; MyTVe: try { DB::transaction(function () use($c9K5c, $Wa8N4, &$jq2n1) { ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookSaving())); list($Gv5gR, $Hamse) = $this->getRelationInputs($Wa8N4, $c9K5c->dataEditing()); if ($Gv5gR) { $c9K5c->dataEditing(array_except($c9K5c->dataEditing(), array_keys($Hamse))); } foreach ($c9K5c->dataEditing() as $NS5_3 => $VuXfH) { $Wa8N4->setAttribute($NS5_3, $VuXfH); } if ($c9K5c->engine() == FormEngine::TREE || $c9K5c->engine() == FormEngine::TREE_MASS) { $pVCto = $Wa8N4->newQuery()->where(array($this->getKeyName() => $c9K5c->itemId()))->first($this->getFormColumns()); BizException::throwsIf(L('Parent Error'), !TreeUtil::modelItemChangeAble($Wa8N4, $c9K5c->itemId(), $pVCto->getAttribute($this->getTreePidColumn()), $Wa8N4->getAttribute($this->getTreePidColumn()), $this->getKeyName(), $this->getTreePidColumn())); } $jq2n1 = $Wa8N4->update(); $this->updateRelation($c9K5c, $Wa8N4, $Gv5gR, $Hamse); ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookSaved())); ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookChanged())); }); } catch (\Exception $l8i0J) { $this->throwDatabaseException($l8i0J); } goto OxqJw; XBrGo: } public function sortEdit(Form $c9K5c) { goto v4ntl; fQGcb: if ($this->isSoftDeletes) { $uEedj->withTrashed(); } goto pqn_y; O0cfA: $c9K5c->repositoryFilter()->executeQueries($uEedj); goto mTJMk; tSFoq: $uEedj = $this->newQuery(); goto O0cfA; dKeMh: $IpOIw = $this->newQuery(); goto ucY3R; otPSc: switch ($Vg301) { case SortDirection::UP: if ($n3_jf > 0) { goto F9Ukj; JYuAB: $srFEO->get($n3_jf - 1)->save(); goto v1QFN; F9Ukj: $s47Zh = $srFEO->get($n3_jf)->{$HwF8D}; goto vYs1w; jcdmM: $srFEO->get($n3_jf - 1)->{$HwF8D} = $s47Zh; goto JYuAB; vYs1w: $srFEO->get($n3_jf)->{$HwF8D} = $srFEO->get($n3_jf - 1)->{$HwF8D}; goto yPIzs; yPIzs: $srFEO->get($n3_jf)->save(); goto jcdmM; v1QFN: } break; case SortDirection::DOWN: if ($n3_jf < $srFEO->count() - 1) { goto TkYsp; jdiMN: $srFEO->get($n3_jf + 1)->save(); goto sv9ni; ZKCMx: $srFEO->get($n3_jf + 1)->{$HwF8D} = $s47Zh; goto jdiMN; TkYsp: $s47Zh = $srFEO->get($n3_jf)->{$HwF8D}; goto SSKEU; SSKEU: $srFEO->get($n3_jf)->{$HwF8D} = $srFEO->get($n3_jf + 1)->{$HwF8D}; goto bWCTk; bWCTk: $srFEO->get($n3_jf)->save(); goto ZKCMx; sv9ni: } break; case SortDirection::TOP: if ($n3_jf > 0) { $YbS73 = 2; $srFEO->each(function ($DUr2V, $qsK6T) use($n3_jf, $HwF8D, &$YbS73) { $HLpQn = $DUr2V->{$HwF8D}; if ($qsK6T == $n3_jf) { $DUr2V->{$HwF8D} = 1; } else { $DUr2V->{$HwF8D} = $YbS73++; } if ($HLpQn != $DUr2V->{$HwF8D}) { $DUr2V->save(); } }); } break; case SortDirection::BOTTOM: if ($n3_jf < $srFEO->count() - 1) { goto tLw2Q; tLw2Q: $YbS73 = 1; goto YjhWf; ma10I: $srFEO->get($n3_jf)->save(); goto HQADO; xiR4A: $srFEO->get($n3_jf)->{$this->getSortColumn()} = $YbS73; goto ma10I; YjhWf: $srFEO->each(function ($DUr2V, $qsK6T) use($n3_jf, $HwF8D, &$YbS73) { $HLpQn = $DUr2V->{$HwF8D}; if ($qsK6T == $n3_jf) { return; } else { $DUr2V->{$HwF8D} = $YbS73++; } if ($HLpQn != $DUr2V->{$HwF8D}) { $DUr2V->save(); } }); goto xiR4A; HQADO: } break; } goto P20DL; EdGnc: $YbS73 = 1; goto pOMb0; pOMb0: $srFEO->each(function ($DUr2V) use($HwF8D, &$YbS73) { $YEZ9h = $YbS73++; if ($YEZ9h !== $DUr2V->{$HwF8D}) { $DUr2V->{$HwF8D} = $YEZ9h; $DUr2V->save(); } }); goto hfYRS; pqn_y: if ($c9K5c->engine() === FormEngine::TREE || $c9K5c->engine() === FormEngine::TREE_MASS) { $HwF8D = $this->getTreeSortColumn(); $srFEO = $uEedj->with($this->getRelations())->where(array($this->getTreePidColumn() => $this->model->getAttribute($this->getTreePidColumn())))->orderBy($HwF8D, 'asc')->get(array($this->getKeyName(), $HwF8D)); } else { $HwF8D = $this->getSortColumn(); $srFEO = $uEedj->with($this->getRelations())->orderBy($HwF8D, 'asc')->get(array($this->getKeyName(), $HwF8D)); } goto EdGnc; dXsjG: $c9K5c->scopeExecuteQueries($IpOIw); goto zRuIX; v4ntl: $Vg301 = $this->getArgument('direction'); goto dKeMh; ucY3R: $c9K5c->repositoryFilter()->executeQueries($IpOIw); goto dXsjG; mTJMk: $c9K5c->scopeExecuteQueries($uEedj); goto fQGcb; cCRUg: $c9K5c->item($srFEO); goto otPSc; hfYRS: $n3_jf = -1; goto R3W5m; R3W5m: foreach ($srFEO as $kOFY1 => $DUr2V) { if ($DUr2V->{$this->getKeyName()} == $c9K5c->itemId()) { $n3_jf = $kOFY1; break; } } goto Fs0UU; Fs0UU: BizException::throwsIf('Sort id not found', $n3_jf < 0); goto cCRUg; khVVh: $this->model = $IpOIw->with($this->getRelations())->find($c9K5c->itemId(), $this->getFormColumns()); goto tSFoq; zRuIX: if ($this->isSoftDeletes) { $IpOIw->withTrashed(); } goto khVVh; P20DL: } public function delete(Form $c9K5c, Arrayable $eT3ZX) { goto WwS75; PSZcx: return true; goto WvYGg; I2L8R: DB::transaction(function () use($c9K5c, $lU1V2) { ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookDeleting())); collect($c9K5c->itemId())->filter()->each(function ($CeOJi) use($c9K5c, $lU1V2) { $Wa8N4 = $lU1V2->get($CeOJi); if (!$Wa8N4) { return; } $nx179 = $Wa8N4->toArray(); if ($c9K5c->engine() == FormEngine::TREE || $c9K5c->engine() == FormEngine::TREE_MASS) { BizException::throwsIf(L('Delete Error (has children node)'), !TreeUtil::modelItemDeleteAble($Wa8N4, $c9K5c->itemId(), $this->getTreePidColumn())); } if ($this->isSoftDeletes && $Wa8N4->trashed()) { $Wa8N4->forceDelete(); return; } elseif (!$this->isSoftDeletes) { } $Wa8N4->delete(); }); ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookDeleted())); ResultException::throwsIfFail($c9K5c->hookCall($c9K5c->hookChanged())); }); goto PSZcx; WwS75: $lU1V2 = $this->collection->keyBy($this->getKeyName()); goto I2L8R; WvYGg: } public function deleting(Form $c9K5c) { goto iJ8Qv; jBiDB: $this->collection = $IpOIw->with($this->getRelations())->find($CeOJi, $this->getFormColumns()); goto OoIho; ZEUWD: $CeOJi = $c9K5c->itemId(); goto jBiDB; iJ8Qv: $IpOIw = $this->newQuery(); goto rlUJZ; sLZuc: if ($this->isSoftDeletes) { $IpOIw->withTrashed(); } goto ZEUWD; OoIho: return $this->collection; goto nGUN8; rlUJZ: $c9K5c->repositoryFilter()->executeQueries($IpOIw); goto sLZuc; nGUN8: } public function getTreePidColumn() { goto Xv2Do; Xv2Do: $Wa8N4 = $this->eloquent(); goto AU1v3; AU1v3: if (method_exists($Wa8N4, 'getTreePidColumn')) { return $Wa8N4->getTreePidColumn(); } goto rwwog; rwwog: return parent::getTreePidColumn(); goto P_wuj; P_wuj: } public function getTreeTitleColumn() { goto Dq8rE; dNZ4a: return parent::getTreeTitleColumn(); goto j6MSe; Dq8rE: $Wa8N4 = $this->eloquent(); goto kltDE; kltDE: if (method_exists($Wa8N4, 'getTreeTitleColumn')) { return $Wa8N4->getTreeTitleColumn(); } goto dNZ4a; j6MSe: } public function getTreeSortColumn() { goto hQO5Z; caKRV: if (method_exists($Wa8N4, 'getTreeSortColumn')) { return $Wa8N4->getTreeSortColumn(); } goto Ps4fB; hQO5Z: $Wa8N4 = $this->eloquent(); goto caKRV; Ps4fB: return parent::getTreeSortColumn(); goto ZsrxW; ZsrxW: } public function getTreeItems($bzZJF) { goto Orii9; wlTmM: $bzZJF->scopeExecuteQueries($IpOIw); goto qgkoQ; qgkoQ: $ueSge = $IpOIw->orderBy($this->getTreeSortColumn(), 'ASC')->get($this->getTableColumns()); goto ps7BZ; w6s2h: return $c0PBf; goto yzFyi; Ii1J2: if ($this->relations) { $IpOIw->with($this->relations); } goto wlTmM; Orii9: $IpOIw = $this->newQuery(); goto Ii1J2; o6t1M: $wuZDM = $this->getTreePidColumn(); goto OddXc; OddXc: $EW3J7 = $this->getTreeSortColumn(); goto imvIN; imvIN: $c0PBf = TreeUtil::itemsMergeLevel($ueSge, $gg490, $wuZDM, $EW3J7); goto w6s2h; ps7BZ: $gg490 = $this->getKeyName(); goto o6t1M; yzFyi: } public function getTreeAncestorItems() { goto k5LnR; fyDJy: $U3kuf = array(); goto CGLZ_; CGLZ_: for ($qsK6T = 0, $tloGv = $d84PX; $qsK6T < 99; $qsK6T++) { if (!$tloGv) { break; } $IpOIw = $this->newQuery(); if ($this->relations) { $IpOIw->with($this->relations); } $IpOIw->where(array($this->getKeyName() => $tloGv)); $DUr2V = $IpOIw->first($this->getTableColumns()); if (!$DUr2V) { break; } $U3kuf[] = $DUr2V; $tloGv = $DUr2V->{$this->getTreePidColumn()}; } goto L9I37; k5LnR: $d84PX = $this->getArgument('treePid', null); goto fyDJy; L9I37: return array_reverse($U3kuf); goto ggvdk; ggvdk: } protected function newQuery() { goto NSl6h; tLpDX: $GOTEy = $this->eloquent()->newQuery(); goto g9hLt; g9hLt: return $GOTEy; goto ICgri; NSl6h: if ($this->queryBuilder) { return clone $this->queryBuilder; } goto tLpDX; ICgri: } public function eloquent() { return $this->model ? $this->model : ($this->model = $this->createEloquent()); } public function createEloquent(array $nx179 = array()) { goto jlxVh; jlxVh: $Wa8N4 = new $this->eloquentClass(); goto Tp3PQ; Tp3PQ: if ($nx179) { $Wa8N4->setRawAttributes($nx179); } goto cdOmR; cdOmR: return $Wa8N4; goto v_kTk; v_kTk: } private function getRelations() { return $this->relations; } private function getRelationInputs($Wa8N4, $d997Z = array()) { goto cPDdH; cPDdH: $bx4aO = array(); goto p5BAu; p5BAu: $Gv5gR = array(); goto E0E5o; QosAB: return array(&$Gv5gR, $bx4aO); goto ZcG8M; E0E5o: foreach ($d997Z as $NS5_3 => $VuXfH) { goto rOPe8; qJh2L: if (!$T3TD3) { continue; } goto UYKED; MHjGH: if (method_exists($Wa8N4, $NS5_3)) { $T3TD3 = $NS5_3; } elseif (method_exists($Wa8N4, $nQwCz = Str::camel($NS5_3))) { $T3TD3 = $nQwCz; } goto qJh2L; rOPe8: $T3TD3 = null; goto MHjGH; qbxf4: if ($HN67o instanceof Relations\Relation) { $Gv5gR[$NS5_3] = $VuXfH; $bx4aO[$NS5_3] = $T3TD3; } goto MREyq; UYKED: $HN67o = call_user_func(array($Wa8N4, $T3TD3)); goto qbxf4; MREyq: } goto QosAB; ZcG8M: } private function updateRelation(Form $c9K5c, Model $Wa8N4, array $s_mNu, array $Hamse) { foreach ($s_mNu as $HQ4FM => $tcwC2) { goto XDZPJ; B2r6R: if (!method_exists($Wa8N4, $o6nTY)) { continue; } goto iDut1; V_nzJ: $D6y3t = $HN67o instanceof Relations\HasOne || $HN67o instanceof Relations\MorphOne || $HN67o instanceof Relations\BelongsTo; goto qNIW8; qNIW8: $z_R_r = $D6y3t ? $c9K5c->prepareUpdate(array($HQ4FM => $tcwC2)) : array($HQ4FM => $tcwC2); goto pguHt; XDZPJ: $o6nTY = $Hamse[$HQ4FM] ? $Hamse[$HQ4FM] : $HQ4FM; goto B2r6R; pguHt: if (empty($z_R_r)) { continue; } goto xXtuG; iDut1: $HN67o = $Wa8N4->{$o6nTY}(); goto V_nzJ; xXtuG: switch (true) { case $HN67o instanceof Relations\BelongsToMany: case $HN67o instanceof Relations\MorphToMany: if (isset($z_R_r[$HQ4FM])) { $HN67o->sync($z_R_r[$HQ4FM]); } break; case $HN67o instanceof Relations\HasOne: goto VTxFV; szgrk: if (is_null($mByNK)) { goto BBj_I; BBj_I: $mByNK = $HN67o->getRelated(); goto xb3NW; Jxwxq: $G5fON = Arr::last(explode('.', $BmLM_)); goto QYSxm; QYSxm: $mByNK->{$HN67o->getForeignKeyName()} = $Wa8N4->{$G5fON}; goto KpwbB; xb3NW: $BmLM_ = $HN67o->getQualifiedParentKeyName(); goto Jxwxq; KpwbB: } goto aQ_iz; VTxFV: $mByNK = $Wa8N4->{$o6nTY}; goto szgrk; aQ_iz: foreach ($z_R_r[$HQ4FM] as $NS5_3 => $VuXfH) { $mByNK->setAttribute($NS5_3, $VuXfH); } goto Tw2_1; Tw2_1: $mByNK->save(); goto ayaQH; ayaQH: break; goto zWYMK; zWYMK: case $HN67o instanceof Relations\BelongsTo: case $HN67o instanceof Relations\MorphTo: goto r_WQx; Au_ds: break; goto TZJMP; GRle4: $aOVUW = version_compare(app()->version(), '5.8.0', '<') ? 'getForeignKey' : 'getForeignKeyName'; goto SoWbR; SoWbR: if (!$Wa8N4->{$HN67o->{$aOVUW}()}) { $Wa8N4->{$HN67o->{$aOVUW}()} = $tOVxq->getKey(); $Wa8N4->save(); } goto Au_ds; r_WQx: $tOVxq = $Wa8N4->{$o6nTY}; goto Y4PwS; mJkH1: foreach ($z_R_r[$HQ4FM] as $NS5_3 => $VuXfH) { $tOVxq->setAttribute($NS5_3, $VuXfH); } goto kDNVo; kDNVo: $tOVxq->save(); goto GRle4; Y4PwS: if (is_null($tOVxq)) { $tOVxq = $HN67o->getRelated(); } goto mJkH1; TZJMP: case $HN67o instanceof Relations\MorphOne: goto q0MCZ; q0MCZ: $mByNK = $Wa8N4->{$o6nTY}; goto dOxGx; Klqvc: break; goto BQUKq; KFvHd: $mByNK->save(); goto Klqvc; LGXwj: foreach ($z_R_r[$HQ4FM] as $NS5_3 => $VuXfH) { $mByNK->setAttribute($NS5_3, $VuXfH); } goto KFvHd; dOxGx: if (is_null($mByNK)) { $mByNK = $HN67o->make(); } goto LGXwj; BQUKq: case $HN67o instanceof Relations\HasMany: case $HN67o instanceof Relations\MorphMany: goto TSUsv; TSUsv: if (!is_array($z_R_r[$HQ4FM])) { $yFWLi = @json_decode($z_R_r[$HQ4FM], true); if (is_array($yFWLi)) { $z_R_r[$HQ4FM] = $yFWLi; } } goto W_QF_; a8l4O: break; goto rHZMz; ynAYJ: foreach ($z_R_r[$HQ4FM] as $mByNK) { goto axsbI; PssIJ: Arr::forget($mByNK, '_remove_'); goto McvQj; EuwVY: $E3pBM->fill($mByNK); goto D2DAk; QU_l3: $E3pBM = $HN67o->findOrNew(Arr::get($mByNK, $PkGEp)); goto xZkPB; xZkPB: if (Arr::get($mByNK, '_remove_') == 1) { $E3pBM->delete(); continue; } goto PssIJ; McvQj: $cANPj = Arr::get($mByNK, $HN67o->getModel()->getKeyName()); goto nLd0v; nLd0v: if ($cANPj === null || $cANPj === '') { Arr::forget($mByNK, $HN67o->getModel()->getKeyName()); } goto EuwVY; XOD8f: $PkGEp = $HN67o->getRelated()->getKeyName(); goto QU_l3; axsbI: $HN67o = $Wa8N4->{$o6nTY}(); goto XOD8f; D2DAk: $E3pBM->save(); goto bOqJg; bOqJg: } goto a8l4O; W_QF_: BizException::throwsIf("Field {$HQ4FM} ( HasMany|MorphMany ) is not array", !is_array($z_R_r[$HQ4FM])); goto ynAYJ; rHZMz: } goto KdpmR; KdpmR: } } }