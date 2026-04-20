<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\AgentEmail;

use Lark\Request\RestRequest;

/**
 * 获取客服邮箱
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentEmails extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agent_emails';

    protected string $httpMethod = 'GET';
}
