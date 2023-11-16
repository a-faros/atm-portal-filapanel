<?php

namespace App\Filament\Employee\Resources\TaskStatusResource\Pages;

use App\Filament\Employee\Resources\TaskStatusResource;
use Filament\Resources\Pages\EditRecord;

class EditTaskStatus extends EditRecord
{
    protected static string $resource = TaskStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
