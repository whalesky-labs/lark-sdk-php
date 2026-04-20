<?php

declare(strict_types=1);

namespace Lark\Api\Im\Image;

use Lark\Request\RestRequest;

/**
 * 上传图片
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1Images extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/images';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
