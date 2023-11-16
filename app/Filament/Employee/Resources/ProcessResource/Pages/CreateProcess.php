<?php

namespace App\Filament\Employee\Resources\ProcessResource\Pages;

use App\Filament\Employee\Resources\ProcessResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProcess extends CreateRecord
{
    protected static string $resource = ProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
