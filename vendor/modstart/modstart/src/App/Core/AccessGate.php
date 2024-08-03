<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\App\Core; use Illuminate\Http\Request; interface AccessGate { function check(Request $mHrWb); }