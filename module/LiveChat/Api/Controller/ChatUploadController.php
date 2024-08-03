<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\LiveChat\Api\Controller; use ModStart\Data\FileManager; class ChatUploadController extends AbstractChatController { public function index($DcCGv) { return FileManager::handle($DcCGv, 'empty_upload', 'empty_upload_category', $this->userId()); } }