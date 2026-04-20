<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Category;

use Lark\Request\RestRequest;

/**
 * 获取知识库分类
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1CategoriesId extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/categories/:id';

    protected string $httpMethod = 'GET';
}
