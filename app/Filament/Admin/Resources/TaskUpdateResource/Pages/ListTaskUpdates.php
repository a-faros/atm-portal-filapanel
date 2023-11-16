<?php

namespace App\Filament\Admin\Resources\TaskUpdateResource\Pages;

use App\Filament\Admin\Resources\TaskUpdateResource;
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
