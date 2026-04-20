<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\AgentSchedule;

use Lark\Request\RestRequest;

/**
 * 创建客服工作日程
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentSchedules extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agent_schedules';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
