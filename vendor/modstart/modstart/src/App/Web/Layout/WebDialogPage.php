<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Web\Layout; use ModStart\Core\Util\AgentUtil; use ModStart\Layout\Page; class WebDialogPage extends Page { public function view($de9hK = null) { if (null === $de9hK) { goto RUmGP; cdP9Q: $kx1ji = modstart_config()->getWithEnv('siteTemplate', 'default'); goto oLMW8; ySzNi: return 'modstart::app.web.dialogPage'; goto xzuJu; oLMW8: $pLGjD = "theme.{$kx1ji}.m.dialogPage"; goto UZ3l4; dzSYo: $ZT4F5 = "theme.{$kx1ji}.pc.dialogPage"; goto j24Vl; TN9Tg: if (AgentUtil::isMobile()) { if (view()->exists($pLGjD)) { return $pLGjD; } if (view()->exists($kp3Qz)) { return $kp3Qz; } } goto kDRS9; UZ3l4: $kp3Qz = 'theme.default.m.dialogPage'; goto dzSYo; j24Vl: $p_KWj = 'theme.default.pc.dialogPage'; goto TN9Tg; kDRS9: if (view()->exists($ZT4F5)) { return $ZT4F5; } goto yD8DF; yD8DF: if (view()->exists($p_KWj)) { return $p_KWj; } goto ySzNi; RUmGP: if ($this->view) { return $this->view; } goto cdP9Q; xzuJu: } return parent::view($de9hK); } }