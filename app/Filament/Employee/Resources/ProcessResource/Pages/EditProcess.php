<?php

namespace App\Filament\Employee\Resources\ProcessResource\Pages;

use App\Filament\Employee\Resources\ProcessResource;
use Filament\Resources\Pages\EditRecord;

class EditProcess extends EditRecord
{
    protected static string $resource = ProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
