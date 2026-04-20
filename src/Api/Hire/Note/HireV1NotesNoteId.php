<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Note;

use Lark\Request\RestRequest;

/**
 * 更新备注
 *
 * @see https://feishu.apifox.cn/api-11276167
 */
final class HireV1NotesNoteId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/notes/:note_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
