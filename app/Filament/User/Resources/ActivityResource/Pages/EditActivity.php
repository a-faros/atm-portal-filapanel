<?php

namespace App\Filament\User\Resources\ActivityResource\Pages;

use App\Filament\User\Resources\ActivityResource;
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