<?php

namespace App\Filament\Employee\Resources\DivisionResource\Pages;

use App\Filament\Employee\Resources\DivisionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDivision extends CreateRecord
{
    protected static string $resource = DivisionResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
