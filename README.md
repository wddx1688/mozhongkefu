Mozhongkefu客服系统
简介
Mozhongkefu是一个基于PHP开发的在线客服系统，旨在为个人、中小型工作室以及企业提供高效的客户服务解决方案。本系统支持实时聊天、多客服协作、客户管理等功能，帮助您快速提升客户服务体验和工作效率。

功能特点
实时聊天：基于WebSocket技术，支持客户与客服人员实时交流12
多客服协作：支持多客服同时在线，提高服务效率4
自动分配：智能分配客户至合适的客服人员
历史记录：保存完整的会话历史，方便后续跟进
快捷回复：预设常用回复语句，提高回复效率
客户管理：完整的客户信息管理功能
多商户支持：支持多商户及时沟通3
前后端分离：采用现代化的前后端分离架构3
系统要求
PHP 8.0+3
MySQL 8.0+3
支持WebSocket的服务器环境
Composer（PHP依赖管理工具）
安装步骤
下载源码 将系统源码下载到您的服务器

配置环境 确保您的服务器满足上述系统要求

安装依赖

composer install
数据库配置

创建数据库
导入数据库文件
配置数据库连接信息
设置运行目录 配置Web服务器的运行目录为public目录，并设置ThinkPHP伪静态规则26

启动WebSocket服务

php think websocket start
目录结构
├── application     // 应用目录
│   ├── admin       // 管理后台
│   ├── api         // API接口
│   ├── common      // 公共模块
│   └── index       // 前台模块
├── config          // 配置文件
├── public          // 静态资源及入口文件
├── runtime         // 运行时目录
├── vendor          // Composer依赖
├── composer.json   // Composer定义文件
├── LICENSE         // 授权说明文件
├── README.md       // README文件
└── think           // 命令行入口文件[1](https://github.com/tankdevin/chat1.0 "github.com")[2](https://github.com/webasp/chat "github.com")
快速测试
切换到public目录后，可使用PHP内置的Web服务器进行快速测试：

php -S localhost:8888 router.php
```[1](https://github.com/tankdevin/chat1.0 "github.com")

## 配置说明

1. **基础配置**
   编辑config目录下的配置文件，设置站点信息、数据库连接等

2. **客服设置**
   在管理后台添加客服账号，设置工作时间、权限等

3. **接入设置**
   获取接入代码，嵌入到您的网站或应用中

## 二次开发

本系统基于ThinkPHP框架开发，遵循MVC设计模式，便于二次开发和功能扩展。系统提供了丰富的API接口，可以与其他系统集成，实现更多定制化需求[23](https://modstart.com/p/vlf2kj36d2j5uscn "modstart.com")。

## 许可协议

本系统遵循开源协议，详情请查看LICENSE文件。

## 技术支持

如有问题或需要技术支持，请联系我们的技术团队。

 --- 

## 技术架构

系统核心采用ThinkPHP框架，根据不同版本可选择：
- ThinkPHP 8.0+[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")：最新版本，推荐新项目使用
- ThinkPHP 5.1[2](https://github.com/webasp/chat "github.com")：稳定版本，兼容性更好

前端采用uniapp + 全新UI设计[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")，支持多端适配，提供更现代的用户界面和交互体验。

## 消息处理

系统使用GatewayWorker[2](https://github.com/webasp/chat "github.com")技术处理WebSocket连接，实现高效的实时消息推送和处理。这使得客服能够即时接收客户消息并快速响应，大大提升沟通效率。

## 智能客服功能

除了基础的人工客服功能，系统还可以集成NLP（自然语言处理）技术[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")[9](https://blog.csdn.net/weixin_67874152/article/details/146029202 "blog.csdn.net")，实现：

- **自动问答**：系统能够理解客户问题并给出合理回答[9](https://blog.csdn.net/weixin_67874152/article/details/146029202 "blog.csdn.net")
- **语义理解与意图识别**：准确把握用户问题的实际含义[9](https://blog.csdn.net/weixin_67874152/article/details/146029202 "blog.csdn.net")
- **多轮对话**：支持连续的对话，记住上下文内容[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")
- **情感分析**：识别客户情绪，调整回复策略[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")
- **知识库管理**：维护常见问题库，不断优化回答质量[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")

## 环境变量配置

若需要使用短信或其他API服务，可通过环境变量配置访问凭证：
SMS_ACCESS_KEY_ENV=您的AccessKey ID SMS_ACCESS_KEY_SECRET_ENV=您的AccessKey Secret


## 拓展目录结构

完整的系统目录可能还包含：
├── extend // 扩展类库目录 ├── route // 路由定义目录 ├── thinkphp // 框架核心目录 ├── gateway // GatewayWorker相关文件 ├── api // API接口定义文件 └── router.php // 快速测试路由文件1

# Mozhongkefu客服系统

## 简介
Mozhongkefu是一个基于PHP开发的在线客服系统，旨在为个人、中小型工作室以及企业提供高效的客户服务解决方案。本系统支持实时聊天、多客服协作、客户管理等功能，帮助您快速提升客户服务体验和工作效率。

## 功能特点

- **实时聊天**：基于WebSocket技术，支持客户与客服人员实时交流[1](https://github.com/tankdevin/chat1.0 "github.com")[2](https://github.com/webasp/chat "github.com")
- **多客服协作**：支持多客服同时在线，提高服务效率[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")
- **自动分配**：智能分配客户至合适的客服人员
- **历史记录**：保存完整的会话历史，方便后续跟进
- **快捷回复**：预设常用回复语句，提高回复效率
- **客户管理**：完整的客户信息管理功能
- **多商户支持**：支持多商户及时沟通[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")
- **前后端分离**：采用现代化的前后端分离架构[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")

## 系统要求

- PHP 8.0+[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")
- MySQL 8.0+[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")
- 支持WebSocket的服务器环境
- Composer（PHP依赖管理工具）

## 安装步骤

1. **下载源码**
   将系统源码下载到您的服务器

2. **配置环境**
   确保您的服务器满足上述系统要求

3. **安装依赖**
   ```
   composer install
   ```

4. **数据库配置**
   - 创建数据库
   - 导入数据库文件
   - 配置数据库连接信息

5. **设置运行目录**
   配置Web服务器的运行目录为public目录，并设置ThinkPHP伪静态规则[26](https://blog.csdn.net/samyht1688/article/details/142905862 "blog.csdn.net")

6. **启动WebSocket服务**
   ```
   php think websocket start
   ```

## 目录结构

```
├── application     // 应用目录
│   ├── admin       // 管理后台
│   ├── api         // API接口
│   ├── common      // 公共模块
│   └── index       // 前台模块
├── config          // 配置文件
├── public          // 静态资源及入口文件
├── runtime         // 运行时目录
├── vendor          // Composer依赖
├── composer.json   // Composer定义文件
├── LICENSE         // 授权说明文件
├── README.md       // README文件
└── think           // 命令行入口文件[1](https://github.com/tankdevin/chat1.0 "github.com")[2](https://github.com/webasp/chat "github.com")
```

## 快速测试

切换到public目录后，可使用PHP内置的Web服务器进行快速测试：
```
php -S localhost:8888 router.php
```[1](https://github.com/tankdevin/chat1.0 "github.com")

## 配置说明

1. **基础配置**
   编辑config目录下的配置文件，设置站点信息、数据库连接等

2. **客服设置**
   在管理后台添加客服账号，设置工作时间、权限等

3. **接入设置**
   获取接入代码，嵌入到您的网站或应用中

## 二次开发

本系统基于ThinkPHP框架开发，遵循MVC设计模式，便于二次开发和功能扩展。系统提供了丰富的API接口，可以与其他系统集成，实现更多定制化需求[23](https://modstart.com/p/vlf2kj36d2j5uscn "modstart.com")。

## 许可协议

本系统遵循开源协议，详情请查看LICENSE文件。

## 技术支持

如有问题或需要技术支持，请联系我们的技术团队。

 --- 

## 技术架构

系统核心采用ThinkPHP框架，根据不同版本可选择：
- ThinkPHP 8.0+[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")：最新版本，推荐新项目使用
- ThinkPHP 5.1[2](https://github.com/webasp/chat "github.com")：稳定版本，兼容性更好

前端采用uniapp + 全新UI设计[3](https://gitee.com/fantutc/php-customer-service-system?skip_mobile=true "gitee.com")，支持多端适配，提供更现代的用户界面和交互体验。

## 消息处理

系统使用GatewayWorker[2](https://github.com/webasp/chat "github.com")技术处理WebSocket连接，实现高效的实时消息推送和处理。这使得客服能够即时接收客户消息并快速响应，大大提升沟通效率。

## 智能客服功能

除了基础的人工客服功能，系统还可以集成NLP（自然语言处理）技术[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")[9](https://blog.csdn.net/weixin_67874152/article/details/146029202 "blog.csdn.net")，实现：

- **自动问答**：系统能够理解客户问题并给出合理回答[9](https://blog.csdn.net/weixin_67874152/article/details/146029202 "blog.csdn.net")
- **语义理解与意图识别**：准确把握用户问题的实际含义[9](https://blog.csdn.net/weixin_67874152/article/details/146029202 "blog.csdn.net")
- **多轮对话**：支持连续的对话，记住上下文内容[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")
- **情感分析**：识别客户情绪，调整回复策略[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")
- **知识库管理**：维护常见问题库，不断优化回答质量[4](https://gitee.com/shuyan_1_admin/kz_kefu "gitee.com")

## 环境变量配置

若需要使用短信或其他API服务，可通过环境变量配置访问凭证：
```
SMS_ACCESS_KEY_ENV=您的AccessKey ID
SMS_ACCESS_KEY_SECRET_ENV=您的AccessKey Secret
```[5](https://help.aliyun.com/zh/sms/php-demo "help.aliyun.com")

## 拓展目录结构

完整的系统目录可能还包含：
```
├── extend        // 扩展类库目录
├── route         // 路由定义目录
├── thinkphp      // 框架核心目录
├── gateway       // GatewayWorker相关文件
├── api           // API接口定义文件
└── router.php    // 快速测试路由文件[1](https://github.com/tankdevin/chat1.0 "github.com")
```
