<?php

namespace App\Filament\Admin\Resources\DivisionResource\Pages;

use App\Filament\Admin\Resources\DivisionResource;
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