<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace EasyWeChat\Payment\Reverse;

use EasyWeChat\Payment\Kernel\BaseClient;
class Client extends BaseClient
{
    /**
     * Reverse order by out trade number.
     *
     * @param $outTradeNumber
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function byOutTradeNumber($outTradeNumber)
    {
        return $this->reverse($outTradeNumber, 'out_trade_no');
    }
    /**
     * Reverse order by transaction_id.
     *
     * @param $transactionId
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function byTransactionId($transactionId)
    {
        return $this->reverse($transactionId, 'transaction_id');
    }
    /**
     * Reverse order.
     *
     * @param $number
     * @param $type
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function reverse($number, $type)
    {
        $params = ['appid' => $this->app['config']->app_id, $type => $number];
        return $this->safeRequest($this->wrap('secapi/pay/reverse'), $params);
    }
}