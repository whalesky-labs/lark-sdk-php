<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 删除筛选视图
 *
 * @see https://feishu.apifox.cn/api-10730226
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsSheetIdFilterViewsFilterViewIdDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/:sheet_id/filter_views/:filter_view_id';

    protected string $httpMethod = 'DELETE';
}
