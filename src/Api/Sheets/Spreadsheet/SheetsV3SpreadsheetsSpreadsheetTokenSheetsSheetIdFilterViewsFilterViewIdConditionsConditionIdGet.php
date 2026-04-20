<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 获取筛选条件
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/sheets-v3/spreadsheet-sheet-filter_view-condition/filter-view-condition-user-guide
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsSheetIdFilterViewsFilterViewIdConditionsConditionIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/:sheet_id/filter_views/:filter_view_id/conditions/:condition_id';

    protected string $httpMethod = 'GET';
}
