<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Services;

use Lark\LarkClient;
use Lark\Services\Drive\ExportTaskResource;
use Lark\Services\Drive\FileResource;
use Lark\Services\Drive\FolderResource;
use Lark\Services\Drive\ImportTaskResource;
use Lark\Services\Drive\MediaResource;
use Lark\Services\Drive\MetaResource;
use Lark\Services\Drive\PermissionMemberResource;
use Lark\Services\Drive\PermissionResource;
use Lark\Services\Drive\PublicResource;
use Lark\Services\Drive\RootFolderResource;

final class DriveService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function exportTask(): ExportTaskResource
    {
        return new ExportTaskResource($this->client);
    }

    public function file(): FileResource
    {
        return new FileResource($this->client);
    }

    public function folder(): FolderResource
    {
        return new FolderResource($this->client);
    }

    public function importTask(): ImportTaskResource
    {
        return new ImportTaskResource($this->client);
    }

    public function media(): MediaResource
    {
        return new MediaResource($this->client);
    }

    public function meta(): MetaResource
    {
        return new MetaResource($this->client);
    }

    public function permission(): PermissionResource
    {
        return new PermissionResource($this->client);
    }

    public function permissionMember(): PermissionMemberResource
    {
        return new PermissionMemberResource($this->client);
    }

    public function public(): PublicResource
    {
        return new PublicResource($this->client);
    }

    public function rootFolder(): RootFolderResource
    {
        return new RootFolderResource($this->client);
    }
}
