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

namespace Lark\Api\Hire\Attachment;

use Lark\Request\RestRequest;

/**
 * 获取附件信息
 *
 * @see https://feishu.apifox.cn/api-11267633
 */
final class HireV1AttachmentsAttachmentId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/attachments/:attachment_id';

    protected string $httpMethod = 'GET';
}
