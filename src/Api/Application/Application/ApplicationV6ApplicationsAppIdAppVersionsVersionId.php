<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Application\Application;

use Lark\Request\RestRequest;

/**
 * 获取应用版本信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uQjN3QjL0YzN04CN2cDN
 */
final class ApplicationV6ApplicationsAppIdAppVersionsVersionId extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/:app_id/app_versions/:version_id';

    protected string $httpMethod = 'GET';
}
