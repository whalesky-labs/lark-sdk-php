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

namespace Lark\Api\Okr\User;

use Lark\Request\RestRequest;

/**
 * 获取用户的 OKR 列表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uQjN3QjL0YzN04CN2cDN
 */
final class OkrV1UsersUserIdOkrs extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/users/:user_id/okrs';

    protected string $httpMethod = 'GET';
}
