<p align="center">
  <img src="https://avatars.githubusercontent.com/u/277389313?s=200&v=4" width="128" height="128" alt="Lark SDK for PHP">
</p>

<h1 align="center">Lark SDK for PHP</h1>

<p align="center">
  一个轻量、通用、不绑定框架的飞书 OpenAPI PHP SDK。
</p>

<p align="center">
  贴近官方 OpenAPI · 原始数组参数 · 原始数组响应 · 不管理 Token 生命周期
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-%3E%3D8.1-777BB4?logo=php&logoColor=white" alt="PHP >= 8.1">
  <img src="https://img.shields.io/badge/Composer-package-885630?logo=composer&logoColor=white" alt="Composer package">
  <img src="https://img.shields.io/badge/PSR--7%20%7C%20PSR--17%20%7C%20PSR--18-4A5568" alt="PSR-7 PSR-17 PSR-18">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License"></a>
</p>

[English](./README.md) | [简体中文](./README.zh-CN.md)

Lark SDK for PHP 是一个面向飞书 OpenAPI 的轻量级 PHP SDK，核心目标是提供贴近官方接口的协议层调用能力。SDK 保持克制设计，不封装业务流程，不校验业务参数，不管理 token 生命周期，方便业务系统按自己的方式集成和扩展。

> 当前项目正在开发中。第一阶段会优先完成 SDK Core、认证接口、通讯录和 IM 模块。

## 项目目标

- 为飞书 OpenAPI 提供完整、可维护的 PHP SDK。
- 接口设计尽量贴近飞书官方 OpenAPI。
- 保持 SDK 轻量，不封装业务逻辑。
- 支持普通 PHP 项目，也兼容 Laravel、Hyperf 等常见框架。
- 尽量基于 PSR 标准实现。

## 设计原则

- PHP `>= 8.1`。
- 一个 Composer 包。
- 核心不绑定任何框架。
- HTTP 层基于 PSR-7、PSR-17、PSR-18。
- 请求参数使用原始数组。
- 响应结果返回原始数组。
- 不强制 DTO。
- 不做请求参数校验。
- 不管理 token 生命周期。
- 不做业务流程编排。
- Webhook 能力后续里程碑再加入。

## SDK 负责什么

本 SDK 只聚焦飞书 OpenAPI 协议层能力：

- 组织飞书 OpenAPI 请求。
- 通过 PSR 兼容 HTTP 客户端发送请求。
- 解析飞书 API 响应。
- 提供认证相关 API 封装。
- 提供统一异常模型。
- 支持 JSON、Query、Form、Multipart、上传、下载等常见请求形式。

## SDK 不负责什么

本 SDK 不处理业务层逻辑：

- 不缓存、刷新或管理 access token。
- 不校验必填字段或参数类型。
- 不改写官方字段名。
- 不提供业务流程 helper。
- 不隐藏飞书接口原始错误信息。

## 规划架构

```text
src/
  Auth/
  Contracts/
  Core/
    Config.php
    Exception/
    Http/
    Response/
  OpenApi/
  Services/
  LarkClient.php
tests/
examples/
generator/
```

## 规划调用方式

```php
$client->auth()->tenantAccessToken()->create($payload);

$client->contact()->user()->get($query);

$client->im()->message()->create($payload);
```

请求参数使用数组传入，响应结果也以数组返回。

## 路线图

### Milestone 1：Core

- 配置模型
- 基于 PSR 的 HTTP 层
- 响应解析器
- 异常模型
- 认证 API 封装

### Milestone 2：高频接口

- 通讯录
- IM

### Milestone 3：协作接口

- 云空间
- 云文档
- 日历

### Milestone 4：更多模块

- 审批
- 任务
- Wiki
- 搜索
- 其他 OpenAPI 模块

### Milestone 5：质量与发布

- 示例
- 测试
- CI
- 文档
- Packagist 发布

### Milestone 6：Webhook

- 签名校验
- 解密
- 事件解析

## 安装

当前包还未发布。

首个版本发布后，可通过 Composer 安装：

```bash
composer require lark-sdk-php/lark-sdk-php
```

## 当前进度

目前已实现：

- Core 配置
- 基于 PSR 的 HTTP 请求链路
- 响应解析
- 统一异常模型
- `app_access_token` 与 `tenant_access_token` 接口封装

更多 OpenAPI 模块会按阶段继续补充。

## 快速开始

```php
use Lark\Core\Config;
use Lark\LarkClient;
use GuzzleHttp\Client as GuzzleClient;
use Nyholm\Psr7\Factory\Psr17Factory;

$psr18Client = new GuzzleClient();
$factory = new Psr17Factory();

$client = new LarkClient(
    new Config(
        appId: 'your_app_id',
        appSecret: 'your_app_secret'
    ),
    $psr18Client,
    $factory,
    $factory
);

$result = $client->auth()->tenantAccessToken()->create();
```

可运行示例见 `examples/get-tenant-access-token.php`。

## 开源协议

本项目基于 [MIT](LICENSE) 协议开源。
