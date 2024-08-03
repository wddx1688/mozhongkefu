<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\AdminManager\Widget; use Illuminate\Support\Str; use ModStart\Core\Util\SerializeUtil; use ModStart\Widget\AbstractWidget; use Module\AdminManager\Util\ModuleUtil; class ServerInfoWidget extends AbstractWidget { protected $view = 'module::AdminManager.View.widget.serverInfo'; protected function variables() { goto DOSKj; F_L5i: return array('modules' => $f6JWK, 'attributes' => $this->formatAttributes(), 'phpExtensions' => $zmW0o); goto IbfIo; NBKGo: $f6JWK = SerializeUtil::jsonEncode(array('modules' => ModuleUtil::modules())); goto P_Fa6; DOSKj: $zmW0o = get_loaded_extensions(); goto NBKGo; P_Fa6: if (function_exists('gzdeflate')) { $f6JWK = 'V_Z_' . base64_encode(gzdeflate($f6JWK)); } else { $f6JWK = 'V_' . base64_encode($f6JWK); } goto F_L5i; IbfIo: } }