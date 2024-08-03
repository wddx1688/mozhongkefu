<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Shell; use Illuminate\Console\Application; use Illuminate\Events\Dispatcher; use Symfony\Component\Console\Command\Command; use Symfony\Component\Console\Input\InputInterface; use Symfony\Component\Console\Output\OutputInterface; class ShellApplication extends Application { public function __construct($rfBQu = 'Console Application', $hi1qn = '1.0.0') { goto wYO1_; lmcns: $this->setName($rfBQu); goto ZrA63; wYO1_: parent::__construct($B_Yfd = new \Illuminate\Foundation\Application(), new Dispatcher($B_Yfd), $hi1qn); goto lmcns; rwXG8: $this->setCatchExceptions(true); goto CXfpX; ZrA63: $this->setAutoExit(true); goto rwXG8; CXfpX: } public function command($wonam, \Closure $oZLCv, $CC6Mg = null) { return $this->add((new ClosureCommand($wonam, $oZLCv))->describe($CC6Mg)); } public function runAsSingle(InputInterface $ErQts = null, OutputInterface $pkbsE = null) { foreach ($this->all() as $YmK0O) { $this->setDefaultCommand($YmK0O, true); break; } return $this->run($ErQts, $pkbsE); } }