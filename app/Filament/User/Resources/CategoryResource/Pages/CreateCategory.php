<?php

namespace App\Filament\User\Resources\CategoryResource\Pages;

use App\Filament\User\Resources\CategoryResource;
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
