<?php

namespace App\Filament\User\Resources\AssetStateResource\Pages;

use App\Filament\User\Resources\AssetStateResource;
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
