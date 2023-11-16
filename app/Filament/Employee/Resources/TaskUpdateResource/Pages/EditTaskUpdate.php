<?php

namespace App\Filament\Employee\Resources\TaskUpdateResource\Pages;

use App\Filament\Employee\Resources\TaskUpdateResource;
use Filament\Resources\Pages\EditRecord;

class EditTaskUpdate extends EditRecord
{
    protected static string $resource = TaskUpdateResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
