<?php

namespace App\Filament\User\Resources\ObjectResource\Pages;

use App\Filament\User\Resources\ObjectResource;
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
