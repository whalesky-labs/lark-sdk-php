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
