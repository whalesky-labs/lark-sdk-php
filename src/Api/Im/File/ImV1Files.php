<?php

declare(strict_types=1);

namespace Lark\Api\Im\File;

use Lark\Request\RestRequest;

/**
 * 上传文件
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1Files extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/files';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
