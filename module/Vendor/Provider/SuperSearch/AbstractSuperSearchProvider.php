<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\SuperSearch; abstract class AbstractSuperSearchProvider { public abstract function name(); public abstract function title(); public abstract function ping(); public abstract function bucketExists($rfBQu); public abstract function bucketCreate($rfBQu, $EyMD5); public abstract function bucketDelete($rfBQu); public abstract function bucketCount($rfBQu); public abstract function upsert($rfBQu, $vWdBd, $XWlC_); public abstract function delete($rfBQu, $vWdBd); public abstract function get($rfBQu, $vWdBd); public abstract function search($rfBQu, $ZkvUG, $PP9UF, $MpFg6 = array(), $DrwL4 = array()); public function ensureBucket($rfBQu) { if (!$this->bucketExists($rfBQu)) { $UegGl = SuperSearchBiz::get($rfBQu); $this->bucketCreate($rfBQu, $UegGl->fields()); } } }