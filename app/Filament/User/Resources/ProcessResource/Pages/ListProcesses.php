<?php

namespace App\Filament\User\Resources\ProcessResource\Pages;

use App\Filament\User\Resources\ProcessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcesses extends ListRecords
{
    protected static string $resource = ProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
