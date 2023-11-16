<?php

namespace App\Filament\User\Resources\MakerResource\Pages;

use App\Filament\User\Resources\MakerResource;
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
