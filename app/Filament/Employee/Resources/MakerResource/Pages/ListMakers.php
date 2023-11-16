<?php

namespace App\Filament\Employee\Resources\MakerResource\Pages;

use App\Filament\Employee\Resources\MakerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMakers extends ListRecords
{
    protected static string $resource = MakerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
