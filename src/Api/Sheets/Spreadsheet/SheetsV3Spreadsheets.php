<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 创建表格
 *
 * @see https://feishu.apifox.cn/api-58554406
 */
final class SheetsV3Spreadsheets extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
