<?php

declare(strict_types=1);

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
