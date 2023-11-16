<?php

namespace App\Filament\Employee\Resources\ObjectResource\Pages;

use App\Filament\Employee\Resources\ObjectResource;
use Filament\Resources\Pages\EditRecord;

class EditObject extends EditRecord
{
    protected static string $resource = ObjectResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
