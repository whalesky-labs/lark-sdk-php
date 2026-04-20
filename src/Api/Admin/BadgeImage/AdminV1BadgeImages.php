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

namespace Lark\Api\Admin\BadgeImage;

use Lark\Request\RestRequest;

/**
 * 上传勋章图片
 *
 * @see https://feishu.apifox.cn/api-60285556
 */
final class AdminV1BadgeImages extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badge_images';

    protected string $httpMethod = 'POST';
}
