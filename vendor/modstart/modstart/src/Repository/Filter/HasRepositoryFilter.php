<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository\Filter; use Closure; trait HasRepositoryFilter { private $repositoryFilter; private function setupRepositoryFilter() { $this->repositoryFilter = new RepositoryFilter(); } public function repositoryFilter(Closure $k_TMY = null) { goto in_Z_; in_Z_: if (null === $k_TMY) { return $this->repositoryFilter; } goto Tmhvs; Tmhvs: call_user_func($k_TMY, $this->repositoryFilter); goto dmrfc; dmrfc: return $this; goto MVkuY; MVkuY: } }