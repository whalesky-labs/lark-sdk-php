<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 获取筛选
 *
 * @see https://feishu.apifox.cn/api-10124469
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsSheetIdFilter extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/:sheet_id/filter';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
