<p align="center">
  <img src="https://avatars.githubusercontent.com/u/277389313?s=200&v=4" width="128" height="128" alt="Lark SDK for PHP">
</p>

<h1 align="center">Lark SDK for PHP</h1>

<p align="center">
  A lightweight, framework-agnostic PHP SDK for Lark OpenAPI.
</p>

<p align="center">
  Official OpenAPI style · Raw array parameters · Raw array responses · No token lifecycle management
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-%3E%3D8.1-777BB4?logo=php&logoColor=white" alt="PHP >= 8.1">
  <img src="https://img.shields.io/badge/Composer-package-885630?logo=composer&logoColor=white" alt="Composer package">
  <img src="https://img.shields.io/badge/PSR--7%20%7C%20PSR--17%20%7C%20PSR--18-4A5568" alt="PSR-7 PSR-17 PSR-18">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License"></a>
</p>

[English](./README.md) | [简体中文](./README.zh-CN.md)

A lightweight, framework-agnostic PHP SDK for Lark OpenAPI.

> This project is under active development. The first milestone focuses on the SDK core, authentication APIs, Contacts, and IM modules.

## Goals

- Provide a complete and maintainable PHP SDK for Lark OpenAPI.
- Keep the SDK close to the official OpenAPI design.
- Stay lightweight and avoid business-level abstractions.
- Work in plain PHP projects and common frameworks such as Laravel and Hyperf.
- Use PSR standards where possible.

## Design Principles

- PHP `>= 8.1`.
- One Composer package.
- Framework-agnostic core.
- PSR-7, PSR-17, and PSR-18 based HTTP layer.
- Raw array request parameters.
- Raw array responses.
- No DTO requirement.
- No request parameter validation.
- No token lifecycle management.
- No business workflow orchestration.
- Webhook support will be added in a later milestone.

## What This SDK Does

This SDK focuses on protocol-level OpenAPI capabilities:

- Build Lark OpenAPI requests.
- Send HTTP requests through PSR-compatible clients.
- Decode Lark API responses.
- Provide authentication API wrappers.
- Provide consistent exceptions.
- Support common request types such as JSON, query, form, multipart, upload, and download.

## What This SDK Does Not Do

This SDK intentionally does not handle application business logic:

- It does not cache, refresh, or manage access tokens.
- It does not validate required fields or parameter types.
- It does not transform official field names.
- It does not provide business workflow helpers.
- It does not hide original Lark API error details.

## Planned Architecture

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

## Planned Call Style

```php
$client->auth()->tenantAccessToken()->create($payload);

$client->contact()->user()->get($query);

$client->im()->message()->create($payload);
```

Parameters are passed as arrays and responses are returned as arrays.

## Roadmap

### Milestone 1: Core

- Configuration model
- PSR-based HTTP layer
- Response decoder
- Exception model
- Authentication API wrappers

### Milestone 2: High-Frequency APIs

- Contacts
- IM

### Milestone 3: Collaboration APIs

- Drive
- Docs
- Calendar

### Milestone 4: Additional Modules

- Approval
- Task
- Wiki
- Search
- Other OpenAPI modules

### Milestone 5: Quality and Release

- Examples
- Tests
- CI
- Documentation
- Packagist release

### Milestone 6: Webhook

- Signature verification
- Decryption
- Event parsing

## Installation

The package is not published yet.

After the first release, it will be installable with Composer:

```bash
composer require lark-sdk-php/lark-sdk-php
```

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
