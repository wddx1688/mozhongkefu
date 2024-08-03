<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Data; abstract class AbstractDataRepository { public abstract function maxFilenameByte(); public abstract function addTemp($gAXRi, $hCl98, $owyBa, $j7D2N); public abstract function getTemp($gAXRi, $hCl98); public abstract function getTempByPath($rNfgc); public abstract function deleteTempById($CeOJi); public abstract function addData($gAXRi, $hCl98, $owyBa, $j7D2N); public abstract function updateData($ORHuX, $L9MUd); public abstract function getDataById($CeOJi); public abstract function getDataByPath($hCl98); public abstract function deleteDataById($CeOJi); }