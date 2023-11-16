<?php

namespace App\Filament\Employee\Resources\ObjectResource\Pages;

use App\Filament\Employee\Resources\ObjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObjects extends ListRecords
{
    protected static string $resource = ObjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
