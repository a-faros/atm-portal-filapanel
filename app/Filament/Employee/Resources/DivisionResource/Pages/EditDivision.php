<?php

namespace App\Filament\Employee\Resources\DivisionResource\Pages;

use App\Filament\Employee\Resources\DivisionResource;
use Filament\Resources\Pages\EditRecord;

class EditDivision extends EditRecord
{
    protected static string $resource = DivisionResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
