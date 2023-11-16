<?php

namespace App\Filament\Admin\Resources\TaskUpdateResource\Pages;

use App\Filament\Admin\Resources\TaskUpdateResource;
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
