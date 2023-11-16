<?php

namespace App\Filament\Employee\Resources\CategoryResource\Pages;

use App\Filament\Employee\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
