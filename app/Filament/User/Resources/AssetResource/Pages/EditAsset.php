<?php

namespace App\Filament\User\Resources\AssetResource\Pages;

use App\Filament\User\Resources\AssetResource;
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
