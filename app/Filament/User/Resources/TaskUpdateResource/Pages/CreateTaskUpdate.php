<?php

namespace App\Filament\User\Resources\TaskUpdateResource\Pages;

use App\Filament\User\Resources\TaskUpdateResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTaskUpdate extends CreateRecord
{
    protected static string $resource = TaskUpdateResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
