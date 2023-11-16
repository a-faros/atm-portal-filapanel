<?php

namespace App\Filament\Employee\Resources\TaskUpdateResource\Pages;

use App\Filament\Employee\Resources\TaskUpdateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTaskUpdates extends ListRecords
{
    protected static string $resource = TaskUpdateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
