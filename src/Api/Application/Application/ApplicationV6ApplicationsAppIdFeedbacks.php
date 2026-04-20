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
 * 获取应用反馈列表
 *
 * @see https://feishu.apifox.cn/api-60203051
 */
final class ApplicationV6ApplicationsAppIdFeedbacks extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/:app_id/feedbacks';

    protected string $httpMethod = 'GET';
}
