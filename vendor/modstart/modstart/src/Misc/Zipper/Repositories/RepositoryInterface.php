<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Chumper\Zipper\Repositories; interface RepositoryInterface { public function __construct($DtpDz, $Ok3Cz = false, $VnpDT = null); public function addFile($tqD5O, $cycch); public function addFromString($HQ4FM, $N19iJ); public function addEmptyDir($fC631); public function removeFile($cycch); public function getFileContent($cycch); public function getFileStream($cycch); public function each($k_TMY); public function fileExists($D9Isv); public function usePassword($mDyAE); public function getStatus(); public function close(); }