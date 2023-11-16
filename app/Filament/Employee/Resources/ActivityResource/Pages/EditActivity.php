<?php

namespace App\Filament\Employee\Resources\ActivityResource\Pages;

use App\Filament\Employee\Resources\ActivityResource;
use Filament\Resources\Pages\EditRecord;

class EditActivity extends EditRecord
{
    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
