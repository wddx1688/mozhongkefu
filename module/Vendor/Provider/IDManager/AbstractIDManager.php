<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\Vendor\Provider\IDManager; abstract class AbstractIDManager { public abstract function name(); public abstract function all(); public abstract function add($Yb10b); public abstract function remove($Yb10b); public abstract function total(); public abstract function paginate($ZkvUG, $PP9UF); public abstract function paginateRandom($ZkvUG, $PP9UF, $LzFZ1 = 'all', $O0Zfn = 60); public abstract function forgetRandom($LzFZ1 = 'all'); }