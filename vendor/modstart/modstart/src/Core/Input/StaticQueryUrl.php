<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Input; class StaticQueryUrl { public $map = array(); public $glue = '-'; private $query = array(); public function __construct($bx4aO = array()) { $this->map = $bx4aO; } public static function build($bx4aO = array('key' => 'k')) { return new static($bx4aO); } public function add($cANPj, $dKmL2) { $this->map[$cANPj] = $dKmL2; } public function create($IpOIw) { goto kNQxi; kNQxi: $ikc2A = array(); goto jz3yp; lZ6lx: sort($ikc2A); goto TRGjF; TRGjF: return join($this->glue, $ikc2A); goto tJj0i; jz3yp: foreach ($IpOIw as $dKmL2 => $yFWLi) { if (null === $yFWLi) { continue; } if (isset($this->map[$dKmL2])) { if (is_array($yFWLi)) { $ikc2A[] = $this->map[$dKmL2] . $yFWLi[0]; } else { $ikc2A[] = $this->map[$dKmL2] . urlencode("{$yFWLi}"); } } } goto lZ6lx; tJj0i: } public function createMerge($IpOIw) { return $this->create(array_merge($this->query, $IpOIw)); } public function parse($TB87R) { goto hRN57; hRN57: $IpOIw = array(); goto giYRJ; AupXM: return $IpOIw; goto sc1y3; Bw7L6: $this->query = $IpOIw; goto AupXM; giYRJ: $zm9f1 = explode($this->glue, $TB87R); goto QWBbV; QWBbV: foreach ($zm9f1 as $DUr2V) { foreach ($this->map as $cANPj => $dKmL2) { if (strpos($DUr2V, $dKmL2) === 0) { $IpOIw[$cANPj] = substr($DUr2V, strlen($dKmL2)); } } } goto Bw7L6; sc1y3: } public function parseMergeQuery($IpOIw) { foreach ($IpOIw as $dKmL2 => $yFWLi) { $this->query[$dKmL2] = $yFWLi; } } public function getQuery() { return $this->query; } }