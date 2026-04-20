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
 * 更新应用分组信息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/application-v6/application/%s
 */
final class ApplicationV6ApplicationsAppIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/:app_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
