<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\AgentSkill;

use Lark\Request\RestRequest;

/**
 * 创建客服技能
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentSkills extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agent_skills';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
