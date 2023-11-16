<?php

namespace App\Filament\Admin\Resources\ObjectResource\Pages;

use App\Filament\Admin\Resources\ObjectResource;
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
