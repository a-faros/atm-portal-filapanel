<?php

namespace App\Filament\Admin\Resources\ObjectResource\Pages;

use App\Filament\Admin\Resources\ObjectResource;
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
