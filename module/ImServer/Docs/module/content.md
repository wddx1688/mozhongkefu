
## 模块介绍

「IM通讯」提供了提供即时聊天的底层基础框架，加速IM相关应用的功能开发。

## 功能特性

- 单聊
- 群聊
- 客服
- 好友
- 支持分布式

## 功能特性

- 消息MQ
    - Redis发布订阅模式
    - RabbitMQ（开发中）
- WebSocket长链接
- JSSDK开发工具包

## 如何使用

### 配置Redis（默认）

在 .env 文件中增加配置

```
IM_SERVER_REDIS_HOST=
IM_SERVER_REDIS_PASSWORD=
IM_SERVER_REDIS_PORT=
IM_SERVER_REDIS_DATABASE=
```

### 启动IMServer

```
php artisan im-server:worker start
```

### 配置WebSocket转发

Nginx参考

```
location /im_server {
    proxy_pass http://localhost:4050/im_server;
    proxy_http_version 1.1;
    proxy_set_header Origin '';
    proxy_set_header Upgrade $http_upgrade;
    proxy_set_header Connection "upgrade";
    proxy_read_timeout 86400;
}
```

Apache参考

![image-20220613220409655](https://ms-assets.modstart.com/data/image/2022/06/13/50652_wctx_4181.png)

配置文件参考

```conf
#PROXY-START/im_server
<IfModule mod_proxy.c>
    ProxyRequests Off
    SSLProxyEngine on
    ProxyPass /im_server ws://localhost:4050/im_server
    ProxyPassReverse /im_server ws://localhost:4050/im_server
    </IfModule>
#PROXY-END/im_server
```



## 适用场景

- IM应用快速开发
- IM相关应用底层架构学习

## 示例代码

### 后端连接消息服务

```php
// 生成Token
$ret = UserAuthRepository::generateToken(
  // 业务类型
  'xxx',
  // 业务系统用户ID
  1,
  // 业务系统用户昵称
  'xxx',
  // 业务系统用户头像
  'http://xxxxx/xxx.jpg'
);
$data = [
  // 获取到用户 Token，用于 ImServer 的用户初始化，需返回给前端
  'token' => $ret['data']['token'],
  // ImServer 的用户 ID
  'imUserId' => $ret['data']['user']['id'],
];
```

### 前端连接消息服务

```javascript
const imServer = new ImServer()
// 监听聊天消息
imServer.addTalkListener(function (data) {
  console.log('TalkMsg', data)
})
// 连接状态变化
imServer.onConnectChange(connectionStatus => {
  console.log('onConnectChange', data)
})
imServer.connect({
  // 连接Token，需要从后端获取
  token: 'xxxxxxxx',
  // 连接成功
  onSuccess: () => {
    // 发送给用户消息
    imServer.sendTalk({
      // ImServer 的用户 ID
      toId: 5,
    }, cb)
  },
  // 连接出错
  onError: (msg) => {
    console.log('onConnectError', msg)
  }
})
```

> 更多代码可参考完整应用 [LiveChat](https://modstart.com/m/LiveChat)

## 相关应用

- [客服应用参考](https://modstart.com/m/LiveChat)



{ADMIN_MENUS}