<?php

namespace App\Filament\User\Resources\MakerResource\Pages;

use App\Filament\User\Resources\MakerResource;
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
