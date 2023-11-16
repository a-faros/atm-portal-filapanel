<?php

namespace App\Filament\User\Resources\ActivityResource\Pages;

use App\Filament\User\Resources\ActivityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateActivity extends CreateRecord
{
    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
