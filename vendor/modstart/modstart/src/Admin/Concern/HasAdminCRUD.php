<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Admin\Concern; use ModStart\Support\Concern\HasPageTitleInfo; trait HasAdminCRUD { use HasPageTitleInfo; use HasAdminGrid; use HasAdminDetail; use HasAdminForm; }