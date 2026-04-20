<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 删除筛选
 *
 * @see https://feishu.apifox.cn/api-10315096
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsSheetIdFilterDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/:sheet_id/filter';

    protected string $httpMethod = 'DELETE';
}
