<?php

namespace App\Filament\User\Resources\ProcessResource\Pages;

use App\Filament\User\Resources\ProcessResource;
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
