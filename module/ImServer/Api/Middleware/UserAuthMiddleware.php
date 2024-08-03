<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace Module\ImServer\Api\Middleware; use Illuminate\Support\Facades\Session; use ModStart\Core\Input\Request; use ModStart\Core\Input\Response; use Module\ImServer\Core\Repository\UserAuthRepository; class UserAuthMiddleware { public function handle($Sh3_E, \Closure $JNgx0) { goto sSkZk; oimSJ: Session::flash('_imServerUser', $t9mtn); goto U8Gyd; sSkZk: list($HB1O4, $yA25I) = Request::getControllerAction(); goto EQS7D; U8Gyd: return $JNgx0($Sh3_E); goto TmQxx; wGU9f: if (empty($t9mtn)) { return Response::generateError('请登录'); } goto B6VAN; EQS7D: $sM_HX = Request::headerGet('im-server-token'); goto DcNt8; B6VAN: Session::flash('imServerUserId', $t9mtn['id']); goto oimSJ; DcNt8: if (empty($sM_HX)) { return Response::generateError('ImServerToken Missing'); } goto VV0wz; VV0wz: $t9mtn = UserAuthRepository::getUserByToken($sM_HX); goto wGU9f; TmQxx: } }