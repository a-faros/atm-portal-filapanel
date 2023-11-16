<?php

namespace App\Filament\User\Resources\DivisionResource\Pages;

use App\Filament\User\Resources\DivisionResource;
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
