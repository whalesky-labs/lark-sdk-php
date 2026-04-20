<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 删除浮动图片
 *
 * @see https://feishu.apifox.cn/api-10750502
 */
final class SheetsV3SpreadsheetsSpreadsheetTokenSheetsSheetIdFloatImagesFloatImageIdDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v3/spreadsheets/:spreadsheet_token/sheets/:sheet_id/float_images/:float_image_id';

    protected string $httpMethod = 'DELETE';
}
