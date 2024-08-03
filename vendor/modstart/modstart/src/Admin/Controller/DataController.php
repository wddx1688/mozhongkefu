<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Controller; use Illuminate\Routing\Controller; use ModStart\Admin\Auth\Admin; use ModStart\Admin\Auth\AdminPermission; use ModStart\Core\Input\Request; use ModStart\Core\Input\Response; use ModStart\Data\FileManager; use ModStart\Data\UeditorManager; class DataController extends Controller { public function fileManager($gAXRi) { if (Request::isPost()) { return FileManager::handle($gAXRi, 'admin_upload', 'admin_upload_category', Admin::id(), null, function ($CDUjL) { switch ($CDUjL) { case 'config': break; case 'categoryDelete': case 'fileDelete': goto SLMSG; trMw9: AdminPermission::permitCheck('DataFileManagerDelete'); goto CkksR; SLMSG: AdminPermission::demoCheck(); goto trMw9; CkksR: break; goto d2wP_; d2wP_: case 'init': case 'upload': case 'save': case 'saveRaw': case 'uploadAndSaveBase64': case 'uploadDirect': case 'uploadDirectRaw': goto ndf00; FPzUn: AdminPermission::permitCheck('DataFileManagerUpload'); goto aahYM; aahYM: break; goto pRrZx; ndf00: AdminPermission::demoCheck(); goto FPzUn; pRrZx: case 'fileEdit': case 'categoryEdit': goto v0FDu; v0FDu: AdminPermission::demoCheck(); goto xDExz; fekMT: break; goto eqiDP; xDExz: AdminPermission::permitCheck('DataFileManagerAdd/Edit'); goto fekMT; eqiDP: case 'list': case 'category': AdminPermission::permitCheck('DataFileManagerView'); break; default: Response::quit(-1, 'Data Permit Denied'); break; } }); } return view('modstart::admin.data.fileManager', array('category' => $gAXRi, 'pageTitle' => L('Select ' . ucfirst($gAXRi)))); } public function ueditor() { return UeditorManager::handle('admin_upload', 'admin_upload_category', Admin::id()); } }