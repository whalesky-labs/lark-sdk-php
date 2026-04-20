<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Faq;

use Lark\Request\RestRequest;

/**
 * 获取知识库图像
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1FaqsIdImageImageKey extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/faqs/:id/image/:image_key';

    protected string $httpMethod = 'GET';
}
