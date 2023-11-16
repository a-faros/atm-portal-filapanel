<?php

namespace App\Filament\User\Resources\TaskUpdateResource\Pages;

use App\Filament\User\Resources\TaskUpdateResource;
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
