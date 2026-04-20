<?php

declare(strict_types=1);

namespace Lark\Api\Ehr\Attachment;

use Lark\Request\RestRequest;

/**
 * 下载人员的附件
 *
 * @see https://feishu.apifox.cn/api-60290945
 */
final class EhrV1AttachmentsToken extends RestRequest
{
    protected string $apiUri = '/open-apis/ehr/v1/attachments/:token';

    protected string $httpMethod = 'GET';
}
