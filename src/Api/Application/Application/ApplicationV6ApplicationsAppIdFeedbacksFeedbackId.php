<?php

declare(strict_types=1);

namespace Lark\Api\Application\Application;

use Lark\Request\RestRequest;

/**
 * 更新应用反馈
 *
 * @see https://feishu.apifox.cn/api-60201435
 */
final class ApplicationV6ApplicationsAppIdFeedbacksFeedbackId extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/:app_id/feedbacks/:feedback_id';

    protected string $httpMethod = 'PATCH';
}
