<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use ModStart\Core\Dao\ModelUtil; class Display extends AbstractField { protected $addable = false; protected $editable = false; public function content($N19iJ) { goto n5ysP; vCg47: return $this; goto c9x4k; n5ysP: $this->hookRendering(function (AbstractField $dBa7F, $DUr2V, $kOFY1) use($N19iJ) { return AutoRenderedFieldValue::make($N19iJ); }); goto STL3K; STL3K: $this->addable(true); goto vCg47; c9x4k: } public function asLink($tzD3x = null, $bLVed = true) { $this->hookRendering(function (AbstractField $dBa7F, $DUr2V, $kOFY1) use($tzD3x, $bLVed) { if (null !== $tzD3x) { goto IAoGA; kLEw6: if (preg_match_all('/\\{(.+?)\\}/', $x7k08, $jRzIK)) { foreach ($jRzIK[1] as $qsK6T => $dKmL2) { $yFWLi = ModelUtil::traverse($DUr2V, $dKmL2); $x7k08 = str_replace($jRzIK[0][$qsK6T], $yFWLi, $x7k08); } } goto ag0vN; IAoGA: $x7k08 = $tzD3x; goto kLEw6; ag0vN: $BvQ2s = ModelUtil::traverse($DUr2V, $dBa7F->column()); goto EARzz; EARzz: } else { $x7k08 = ModelUtil::traverse($DUr2V, $dBa7F->column()); $BvQ2s = $x7k08; } if (!empty($BvQ2s)) { $irW2y = array('<a href="', $x7k08, '" target="_blank" ref="noreferrer noopener" ', $bLVed ? 'target="_blank"' : '', '>', $bLVed ? '<i class="iconfont icon-link"></i> ' : '', htmlspecialchars($BvQ2s), '</a>'); } else { $irW2y = array(); } return AutoRenderedFieldValue::make(join('', $irW2y)); }); return $this; } }