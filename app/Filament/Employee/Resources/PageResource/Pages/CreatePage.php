<?php

namespace App\Filament\Employee\Resources\PageResource\Pages;

use App\Filament\Employee\Resources\PageResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
