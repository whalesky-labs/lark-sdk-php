<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 获取工作表
 *
 * @see https://feishu.apifox.cn/api-58554652
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/query';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
