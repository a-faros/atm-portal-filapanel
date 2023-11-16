<?php

namespace App\Filament\User\Resources\CategoryResource\Pages;

use App\Filament\User\Resources\CategoryResource;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
