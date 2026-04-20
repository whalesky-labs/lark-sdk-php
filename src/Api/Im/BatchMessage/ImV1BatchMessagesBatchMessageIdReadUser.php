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

namespace Lark\Api\Im\BatchMessage;

use Lark\Request\RestRequest;

/**
 * 查询批量消息推送和阅读人数
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ucDO1EjL3gTNx4yN4UTM
 */
final class ImV1BatchMessagesBatchMessageIdReadUser extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/batch_messages/:batch_message_id/read_user';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
