<?php

declare(strict_types=1);

namespace Lark\Api\Im\Image;

use Lark\Request\RestRequest;

/**
 * 下载图片
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1ImagesImageKey extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/images/:image_key';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
