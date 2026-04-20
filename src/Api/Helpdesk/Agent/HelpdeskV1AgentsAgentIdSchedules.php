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

namespace Lark\Api\Helpdesk\Agent;

use Lark\Request\RestRequest;

/**
 * 删除客服工作日程
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentsAgentIdSchedules extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agents/:agent_id/schedules';

    protected string $httpMethod = 'DELETE';
}
