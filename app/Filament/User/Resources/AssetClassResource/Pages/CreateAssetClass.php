<?php

namespace App\Filament\User\Resources\AssetClassResource\Pages;

use App\Filament\User\Resources\AssetClassResource;
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
