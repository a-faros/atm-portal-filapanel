<?php

namespace App\Filament\User\Resources\TaskStatusResource\Pages;

use App\Filament\User\Resources\TaskStatusResource;
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
