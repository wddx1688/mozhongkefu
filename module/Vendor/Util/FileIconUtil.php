<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Util; use ModStart\Core\Assets\AssetsUtil; class FileIconUtil { public static function url($CYQvS) { goto v6fxx; v6fxx: $mxDPB = 'asset/vendor/ueditor/themes/default/exts/'; goto F8AUl; SNkrR: return AssetsUtil::fixFull($mxDPB . $p2_pQ . '.svg'); goto cazKD; ixGng: $p2_pQ = isset($VQao2[$CYQvS]) ? $VQao2[$CYQvS] : $VQao2['default']; goto SNkrR; F8AUl: $VQao2 = array('ai' => 'ai', 'apk' => 'apk', 'chm' => 'chm', 'css' => 'css', 'doc' => 'doc', 'docx' => 'docx', 'dwg' => 'dwg', 'gif' => 'gif', 'html' => 'html', 'jpeg' => 'jpeg', 'jpg' => 'jpg', 'log' => 'log', 'mp3' => 'mp3', 'mp4' => 'mp4', 'pdf' => 'pdf', 'png' => 'png', 'ppt' => 'ppt', 'pptx' => 'pptx', 'psd' => 'psd', 'rar' => 'rar', 'svg' => 'svg', 'torrent' => 'torrent', 'txt' => 'txt', 'xls' => 'xls', 'xlsx' => 'xlsx', 'zip' => 'zip', 'default' => 'unknown', '_DIR_' => 'folder'); goto ixGng; cazKD: } }