<?php

namespace App\Filament\Employee\Resources\TaskStatusResource\Pages;

use App\Filament\Employee\Resources\TaskStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaskStatuses extends ListRecords
{
    protected static string $resource = TaskStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
