<?php

namespace App\Filament\Employee\Resources\MakerResource\Pages;

use App\Filament\Employee\Resources\MakerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMaker extends CreateRecord
{
    protected static string $resource = MakerResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
