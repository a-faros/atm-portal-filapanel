<?php

namespace App\Filament\Employee\Resources\TaskResource\Pages;

use App\Filament\Employee\Resources\TaskResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
