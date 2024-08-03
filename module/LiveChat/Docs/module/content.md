
## 模块介绍

「在线客服系统」是一个为在线匿名用户或会员用户提供在线客服功能

系统依赖 [ImServer](https://modstart.com/m/ImServer) 底层IM消息通讯模块，使用前请先安装该模块。



## 功能特性

- 电脑、手机端自适应
- 客服坐席接待
- 前台弹窗对话界面



## 经典场景

### 手机端客服场景接入

通过手机 WebView 直接访问地址 `http://example.com/live_chat/chat/渠道`



<img src="https://ms-assets.modstart.com/data/image/2022/01/02/27789_fc7p_2240.jpeg" style="max-width:300px;" />



### 电脑端客服场景接入

#### 方式一、通过引入一行 JavaScript 代码即可引入聊天窗口

只需要在 HTML 页面引入以下一行 JavaScript 代码即可已完成客服聊天窗口。

```html
<script src="http://example/vendor/LiveChat/entry/sdk.js?channel=渠道"></script>
```

#### 方式二、通过跳转到新页面引入聊天窗口

`http://example.com/live_chat/chat/渠道`

<img src="https://ms-assets.modstart.com/data/image/2022/01/02/27789_2vqn_7184.jpeg" style="max-width:600px" />



### 客服自定义入口参数

可以通过如下方式为服务客户标记入口参数

```html
<script src="http://example/vendor/LiveChat/entry/sdk.js?channel=渠道&param=参数"></script>
```

`http://example.com/live_chat/chat/渠道?param=参数`


{ADMIN_MENUS}
