<?php

namespace App\Filament\Employee\Resources\AssetResource\Pages;

use App\Filament\Employee\Resources\AssetResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAsset extends CreateRecord
{
    protected static string $resource = AssetResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
