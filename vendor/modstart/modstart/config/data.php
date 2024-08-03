<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ return array('baseUrl' => env('DATA_BASE_URL', '/'), 'upload' => array('image' => array('maxSize' => 1024 * 1024 * 1024, 'maxWidth' => 9999, 'maxHeight' => 9999, 'extensions' => array('jpg', 'png', 'gif', 'jpeg', 'ico', 'webp'), 'compress' => true), 'video' => array('maxSize' => 1024 * 1024 * 1024, 'extensions' => array('mp4', 'mov')), 'audio' => array('maxSize' => 1024 * 1024 * 1024, 'extensions' => array('mp3')), 'file' => array('maxSize' => 1024 * 1024 * 1024, 'extensions' => array('svg', 'png', 'jpg', 'jpeg', 'ico', 'webp', 'mp4', 'mp3', 'pdf', 'txt', 'ppt', 'pptx', 'doc', 'docx', 'xls', 'xlsx', 'csv', 'zip', 'epub', 'ai', 'psd', 'dwg', 'css', 'html', 'ttf')), 'document' => array('maxSize' => 1024 * 1024 * 1024, 'extensions' => array('jpg', 'png', 'pdf', 'bmp', 'mov')), 'zip' => array('maxSize' => 1024 * 1024 * 1024, 'extensions' => array('zip'))));