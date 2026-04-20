<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 订阅云文档事件
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUTNz4SN1MjL1UzM#2eb3504a
 */
final class DriveV1FilesFileTokenSubscribe extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/subscribe';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
