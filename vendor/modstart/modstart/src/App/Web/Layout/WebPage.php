<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Web\Layout; use ModStart\Core\Util\AgentUtil; use ModStart\Layout\Page; class WebPage extends Page { public function view($de9hK = null) { if (null === $de9hK) { goto ednPs; EbMUo: if (AgentUtil::isMobile()) { if (view()->exists($pLGjD)) { return $pLGjD; } if (view()->exists($kp3Qz)) { return $kp3Qz; } } goto OqQf6; OqQf6: if (view()->exists($ZT4F5)) { return $ZT4F5; } goto VBD8O; ZcJS8: $pLGjD = "theme.{$kx1ji}.m.page"; goto DzI8o; s6Gy8: return 'modstart::app.web.page'; goto wGP7P; VBD8O: if (view()->exists($p_KWj)) { return $p_KWj; } goto s6Gy8; DzI8o: $kp3Qz = 'theme.default.m.page'; goto EFFKV; ednPs: if ($this->view) { return $this->view; } goto sGmT3; cPeLW: $p_KWj = 'theme.default.pc.page'; goto EbMUo; EFFKV: $ZT4F5 = "theme.{$kx1ji}.pc.page"; goto cPeLW; sGmT3: $kx1ji = modstart_config()->getWithEnv('siteTemplate', 'default'); goto ZcJS8; wGP7P: } return parent::view($de9hK); } public function useBlank() { $this->view = 'modstart::app.web.pageBlank'; } public function useNarrow() { $this->view = 'modstart::app.web.pageNarrow'; } }