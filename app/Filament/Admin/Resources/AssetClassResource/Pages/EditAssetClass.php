<?php

namespace App\Filament\Admin\Resources\AssetClassResource\Pages;

use App\Filament\Admin\Resources\AssetClassResource;
use Filament\Resources\Pages\EditRecord;

class EditAssetClass extends EditRecord
{
    protected static string $resource = AssetClassResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
