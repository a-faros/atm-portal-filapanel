<?php

namespace App\Filament\Employee\Resources\AssetStateResource\Pages;

use App\Filament\Employee\Resources\AssetStateResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAssetState extends CreateRecord
{
    protected static string $resource = AssetStateResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}