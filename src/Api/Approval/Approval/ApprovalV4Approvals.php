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

namespace Lark\Api\Approval\Approval;

use Lark\Request\RestRequest;

/**
 * 创建审批定义
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uADM4QjLwADO04CMwgDN
 */
final class ApprovalV4Approvals extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/approvals';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
