<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 查询筛选视图
 *
 * @see https://feishu.apifox.cn/api-10728821
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsSheetIdFilterViewsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/:sheet_id/filter_views/query';

    protected string $httpMethod = 'GET';
}
