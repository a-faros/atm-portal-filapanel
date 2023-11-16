<?php

namespace App\Filament\Employee\Resources\AssetResource\Pages;

use App\Filament\Employee\Resources\AssetResource;
use Filament\Resources\Pages\EditRecord;

class EditAsset extends EditRecord
{
    protected static string $resource = AssetResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
