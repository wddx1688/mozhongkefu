<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Shell; use Symfony\Component\Console\Command\Command; use Symfony\Component\Console\Input\InputInterface; use Symfony\Component\Console\Output\OutputInterface; class ClosureCommand extends Command { protected $callback; public function __construct($wonam, \Closure $oZLCv) { goto rY0VL; rY0VL: $this->callback = $oZLCv; goto LLyLD; RDKTG: parent::__construct(); goto U3nOp; LLyLD: $this->signature = $wonam; goto RDKTG; U3nOp: } protected function execute(InputInterface $ErQts, OutputInterface $pkbsE) { goto nsCWT; a3C9I: foreach ((new \ReflectionFunction($this->callback))->getParameters() as $vWjuz) { if (isset($w8stb[$vWjuz->name])) { $OLLRe[$vWjuz->name] = $w8stb[$vWjuz->name]; } } goto QSld9; QSld9: return $this->laravel->call($this->callback->bindTo($this, $this), $OLLRe); goto UKfTx; nsCWT: $w8stb = array_merge($ErQts->getArguments(), $ErQts->getOptions()); goto i1iH3; i1iH3: $OLLRe = array(); goto a3C9I; UKfTx: } public function describe($CC6Mg) { $this->setDescription($CC6Mg); return $this; } }