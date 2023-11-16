<?php

namespace App\Filament\Employee\Resources\MakerResource\Pages;

use App\Filament\Employee\Resources\MakerResource;
use Filament\Resources\Pages\EditRecord;

class EditMaker extends EditRecord
{
    protected static string $resource = MakerResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
