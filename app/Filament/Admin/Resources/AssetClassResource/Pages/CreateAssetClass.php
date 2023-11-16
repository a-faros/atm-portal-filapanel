<?php

namespace App\Filament\Admin\Resources\AssetClassResource\Pages;

use App\Filament\Admin\Resources\AssetClassResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAssetClass extends CreateRecord
{
    protected static string $resource = AssetClassResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
