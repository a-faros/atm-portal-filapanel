<?php

namespace App\Filament\Admin\Resources\AssetStateResource\Pages;

use App\Filament\Admin\Resources\AssetStateResource;
use Filament\Resources\Pages\EditRecord;

class EditAssetState extends EditRecord
{
    protected static string $resource = AssetStateResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
