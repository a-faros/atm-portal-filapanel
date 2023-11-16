<?php

namespace App\Filament\Admin\Resources\TaskUpdateResource\Pages;

use App\Filament\Admin\Resources\TaskUpdateResource;
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
