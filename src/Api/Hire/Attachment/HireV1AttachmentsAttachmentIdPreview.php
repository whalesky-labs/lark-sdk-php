<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Attachment;

use Lark\Request\RestRequest;

/**
 * 获取附件预览信息
 *
 * @see https://feishu.apifox.cn/api-11269129
 */
final class HireV1AttachmentsAttachmentIdPreview extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/attachments/:attachment_id/preview';

    protected string $httpMethod = 'GET';
}
